<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgrammeCourse extends Model
{
    protected $table = 'courses';

    public $timestamps = false;

    public function getProgrammeOfStudyCourses($programmeTypeId, $programmeFacultyId)
    {
        $courses = $this->where('programme_type_id', $programmeTypeId)
                        ->where('programme_faculty_id', $programmeFacultyId)
                        ->get()
                        ->toJson();
        return $courses;
    }
}
