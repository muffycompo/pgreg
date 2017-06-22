<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Qualification extends Model {

	protected $table = 'qualifications';

    protected $fillable = ['user_id','qualification','course','school','qualification_date','grade'];

    public function getQualifications()
    {
        $userId = Auth::user()->id;

        return $this->where('user_id',$userId)->get();
    }

    public function saveQualification($data)
    {
        $userId = Auth::user()->id;

        $qualification = $this->create([
            'user_id' => $userId,
            'qualification' => ucfirst($data['qualification']),
            'course' => Str::title($data['course']),
            'school' => Str::title($data['school']),
            'qualification_date' => $data['date_obtained'],
            'grade' => Str::title($data['grade']),
        ]);

        return $qualification ? : false;
    }

    public function deleteQualification($id)
    {
        $delete = $this->whereId($id)->delete();
        return $delete ? : false;
    }

}
