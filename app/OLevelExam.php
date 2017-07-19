<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class OLevelExam extends Model {

	protected $table = 'olevel_exams';

    protected $fillable = ['user_id', 'subject_id','grade','exam_type_id','exam_year'];

    public $timestamps = false;

    public function getOLevelExams()
    {
        $userId = Auth::user()->id;

        return $this->where('user_id',$userId)->get();
    }

    public function saveOLevelExam($data)
    {
        $userId = Auth::user()->id;

        $exam = $this->create([
            'user_id' => $userId,
            'subject_id' => $data['exam_subject'],
            'grade' => $data['exam_grade'],
            'exam_type_id' => $data['exam_type'],
            'exam_year' => $data['exam_year'],
        ]);

        return $exam ? : false;
    }
    
    public function deleteExam($id)
    {
        $delete = $this->whereId($id)->delete();
        return $delete ? : false;
    }

}
