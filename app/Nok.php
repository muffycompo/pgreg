<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Nok extends Model {

	protected $fillable = ['firstname','lastname','middlename','phone','address','user_id','relationship_id'];

    protected $table = 'next_of_kin_details';

    public $timestamps = false;

    public function getNokDetails()
    {
        $userId = Auth::user()->id;

        return $this->where('user_id',$userId)->first();
    }

    public function saveNok($data)
    {
        $userId = Auth::user()->id;

        if($this->where('user_id',$userId)->count() == 1){
            $nok = $this->where('user_id',$userId)->update([
                'firstname' => Str::title($data['firstname']),
                'lastname' => Str::title($data['middlename']),
                'surname' => Str::title($data['lastname']),
                'phone' => $data['phone'],
                'address' => $data['address'],
                'relationship_id' => $data['relationship'],
            ]);
        } else {
            $nok = $this->create([
                'user_id' => $userId,
                'firstname' => Str::title($data['firstname']),
                'lastname' => Str::title($data['middlename']),
                'surname' => Str::title($data['lastname']),
                'phone' => $data['phone'],
                'address' => $data['address'],
                'relationship_id' => $data['relationship'],
            ]);
        }

        return $nok ? : false;
    }
}
