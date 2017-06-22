<?php namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class PersonalDetail extends Model {

	protected $table = 'personal_details';

    protected $fillable = ['user_id','firstname','lastname','surname','dob','place_of_birth','gender','ms_id','phone','country_id','state_id','lga_id','home_town','email','contact_address','contact_country_id','contact_state_id','contact_lga_id','town_city'];

    protected $dates = ['dob'];

    public function getPersonalDetails()
    {
        $userId = Auth::user()->id;
        return $this->where('user_id',$userId)->first();
    }

    public function savePersonalDetail($data)
    {
        $userId = Auth::user()->id;
        $save = $this->where('user_id',$userId)->update([
            'firstname' => Str::title($data['firstname']),
            'middlename' => Str::title($data['middlename']),
            'surname' => Str::title($data['lastname']),
            'dob' => $data['dob_year'] . '-' . $data['dob_month'] . '-' . $data['dob_day'],
            'place_of_birth' => $data['place_of_birth'],
            'gender' => $data['gender'],
            'ms_id' => $data['marital_status'],
            'phone' => $data['phone'],
            'country_id' => $data['country'],
            'state_id' => $data['state_id'],
            'lga' => $data['lga'],
            'home_town' => $data['home_town'],
            'email' => Str::lower($data['email']),
            'contact_address' => $data['address'],
            'contact_country_id' => $data['contact_country'],
            'contact_state_id' => $data['contact_state_id'],
            'contact_lga' => $data['contact_lga'],
            'town_city' => $data['town_city'],
        ]);

        return $save ? : false;
    }

    public function uploadPassportPhoto($request)
    {
        $user = Auth::user();

        $file = $request->file('passport');
        $extension = $file->getClientOriginalExtension();
        $name = $user->username . '_' . $user->id . '.' . $extension;
        $path = public_path('uploads') . DIRECTORY_SEPARATOR . 'passports';

        // Upload and Resize Image
        Image::make($file)->resize(105,115)->save($path . DIRECTORY_SEPARATOR . $name);

        $passport = $this->where('user_id',$user->id)->update([
            'passport_photo_path' => '/uploads/passports/' . $name
        ]);

        return $passport ? : false;

    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
