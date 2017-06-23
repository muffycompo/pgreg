<?php namespace App;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\Mail;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['firstname', 'lastname', 'username', 'password', 'role_id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    public function loginUser($data)
    {
        $remember = isset($data['remember']) ? true : false;
        return Auth::attempt(['username' => $data['username'], 'password' => $data['password']], $remember);

    }

	public function signupUser($data, $personalDetail, $pin)
	{
	   $signup = $this->create([
            'username' => Str::lower($data['username']),
            'password' => Hash::make($data['password']),
            'firstname' => Str::title($data['firstname']),
            'lastname' => Str::title($data['lastname']),
            'role_id' => 1,
           ]);
        if($signup){
            // Create Personal Details
            $personal = $personalDetail->create([
                'user_id' => $signup->id,
                'firstname' => Str::title($data['firstname']),
                'surname' => Str::title($data['lastname']),
                'email' => Str::lower($data['email']),
                'ms_id' => 1,
                'country_id' => 1,
                'state_id' => 1,
                'contact_country_id' => 1,
                'contact_state_id' => 1,
            ]);
            // Update PIN usage
            $updatePin = $pin->updatePinUsage($data);

            return ($updatePin && $personal) ? $personal : false;
        } else {
            return false;
        }
	}
	
	public function generateResetToken($data)
	{
		$username = Str::lower($data['username']);

	    if($this->where('username',$username)->exists()){
			// Generate a token
			$token = str_random(10) . str_random(10);
			$reset = $this->where('username',$username)->update([
				'password_reset_token' => $token
			]);

			if(!$reset){
				return false;
			} else {
				$user = $this->with('personal')->where('username',$username)->first();

				// Send Email
				Mail::send('email.reset_password_email',['data' => $user],function($message) use ($user){
					$message->to($user->personal()->first()->email);
					$message->subject('Password Reset!');
				});

				return $user;
			}

		} else {
			return false;
		}
	}

	public function resetPassword($data)
	{
		$token = $data['token'];
		$reset = $this->where('password_reset_token',$token)->update([
			'password' => bcrypt($data['password']),
			'password_reset_token' => null
		]);

		return $reset ? : false;
	}

	public function changePassword($data)
	{
		$user = Auth::user();
		if(isset($user->id) && ! is_null($user->id)){
            $change = $this->where('id',$user->id)->update([
                'password' => bcrypt($data['password'])
            ]);

            return $change ? : false;
        }
        return false;
	}


	public function personal()
	{
	    return $this->hasOne('App\PersonalDetail','user_id');
	}

}
