<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Programme extends Model {

	protected $table = 'programmes';

    protected $fillable = ['user_id','programme_type','programme_of_study','mode_of_study'];

    public $timestamps = false;

    public function getProgrammeDetails()
    {
        $userId = Auth::user()->id;

        return $this->where('user_id',$userId)->first();
    }

    public function saveProgramme($data)
    {
        $userId = Auth::user()->id;

        if($this->where('user_id',$userId)->count() == 1){
            $programme = $this->where('user_id',$userId)->update([
                'programme_type' => $data['programme_type'],
                'programme_of_study' => $data['programme_of_study'],
                'mode_of_study' => $data['mode_of_study'],
            ]);
        } else {
            $programme = $this->create([
                'user_id' => $userId,
                'programme_type' => $data['programme_type'],
                'programme_of_study' => $data['programme_of_study'],
                'mode_of_study' => $data['mode_of_study'],
            ]);
        }

        return $programme ? : false;
    }
}
