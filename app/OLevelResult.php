<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class OLevelResult extends Model {

    protected $table = 'olevel_results';

    protected $fillable = ['user_id','ssce_status','number_of_sitting','organization','exam_type_id','exam_year'];

    public function getOLevelResults()
    {
        $userId = Auth::user()->id;

        return $this->where('user_id',$userId)->first();
    }

    public function saveOLevelResult($data)
    {
        $userId = Auth::user()->id;

        if($this->where('user_id',$userId)->count() == 1){
            $oLevelResults = $this->where('user_id',$userId)->update([
                'ssce_status' => Str::title($data['ssce_status']),
                'number_of_sitting' => $data['result_combination'],
                'organization' => $data['organization'],
                'exam_type_id' => $data['exam_type'],
                'exam_year' => $data['exam_year'],
            ]);
        } else {
            $oLevelResults = $this->create([
                'user_id' => $userId,
                'ssce_status' => Str::title($data['ssce_status']),
                'number_of_sitting' => $data['result_combination'],
                'organization' => $data['organization'],
                'exam_type_id' => $data['exam_type'],
                'exam_year' => $data['exam_year'],
            ]);
        }

        return $oLevelResults ? : false;
    }
}
