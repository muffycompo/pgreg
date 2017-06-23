<?php

use Illuminate\Support\Facades\DB;

function genderDropdown($name, $selected, $attributes){
    $genderData = [
      1 => 'Male',
      2 => 'Female',
    ];
    return Form::select($name, $genderData, $selected, $attributes);
}

function maritalStatusDropdown($name, $selected, $attributes){
    $genderData = [
        1 => 'Single',
        2 => 'Married',
        3 => 'Divorced',
        4 => 'widowed',
    ];
    return Form::select($name, $genderData, $selected, $attributes);
}

function programmeTypeDropdown($name, $selected, $attributes){
    $programmeTypes = DB::table('programme_types')->get();
    $options = [];
    foreach($programmeTypes as $type){
        $options[$type->id] = $type->programme_type;
    }
    return Form::select($name, $options, $selected, $attributes);
}

function programmeFacultyDropdown($name, $selected, $attributes){
    $courseCategories = DB::table('course_categories')->get();
    $options = [];
    foreach($courseCategories as $category){
        $options[$category->id] = $category->category_name;
    }
    return Form::select($name, $options, $selected, $attributes);
}

function studyModeDropdown($name, $selected, $attributes){
    $data = [
        '1' => 'Full time',
        '2' => 'Part Time',
    ];
    return Form::select($name, $data, $selected, $attributes);
}

function relationshipDropdown($name, $selected, $attributes){
    $genderData = [
        1 => 'Brother',
        2 => 'Sister',
        3 => 'Mother',
        4 => 'Father',
        5 => 'Uncle',
        6 => 'Aunt',
        7 => 'Cousin',
        8 => 'Nephew',
    ];
    return Form::select($name, $genderData, $selected, $attributes);
}

function examTypeDropdown($name, $selected, $attributes){
    $examType = DB::table('exam_types')->get();
    $options = [];
    foreach($examType as $exam){
        $options[$exam->id] = $exam->exam_type;
    }
    return Form::select($name, $options, $selected, $attributes);
}

function programmesDropdown($name, $selected, $attributes){
    $programmes = DB::table('courses')->get();
    $options = [];
    foreach($programmes as $programme){
        $options[$programme->id] = $programme->course_name;
    }
    return Form::select($name, $options, $selected, $attributes);
}

function countryDropdown($name, $selected, $attributes){
    $countries = DB::table('countries')->get();
    $options = [];
    foreach($countries as $country){
        $options[$country->id] = $country->country_name;
    }
    return Form::select($name, $options, $selected, $attributes);
}

function stateDropdown($name, $selected, $attributes){
    $states = DB::table('states')->get();
    $options = [];
    foreach($states as $state){
        $options[$state->id] = $state->state_name;
    }
    return Form::select($name, $options, $selected, $attributes);
}

function oLevelGradesDropdown($name, $selected, $attributes){
    $gradeData = [
        1 => 'A1',
        2 => 'B2',
        3 => 'B3',
        4 => 'C4',
        5 => 'C5',
        6 => 'C6',
        7 => 'D7',
        8 => 'E8',
        9 => 'F9',
    ];
    return Form::select($name, $gradeData, $selected, $attributes);
}

function oLevelSubjectsDropdown($name, $selected, $attributes){
    $subjects = DB::table('olevel_subjects')->get();
    $options = [];
    foreach($subjects as $subject){
        $options[$subject->id] = $subject->subject_name;
    }
    return Form::select($name, $options, $selected, $attributes);
}

function ssceStatusDropdown($name, $selected, $attributes){
    $ssceStatus = [
        1 => 'I have Result',
        2 => "I don't have Result",
    ];
    return Form::select($name, $ssceStatus, $selected, $attributes);
}

// Expansion Helpers
function expandOLevelExam($id){
    $exam = DB::table('olevel_subjects')->where('id',$id)->first();
    return $exam ? $exam->subject_name : '';
}

function expandOLevelGrade($id){
    $gradeData = [
        1 => 'A1',
        2 => 'B2',
        3 => 'B3',
        4 => 'C4',
        5 => 'C5',
        6 => 'C6',
        7 => 'D7',
        8 => 'E8',
        9 => 'F9',
    ];
    return $gradeData[$id];
}

function expandGender($id){
    $genderData = [
        1 => 'Male',
        2 => 'Female',
    ];
    return $genderData[$id];
}

function expandMaritalStatus($id){
    $msData = [
        1 => 'Single',
        2 => 'Married',
        3 => 'Divorced',
        4 => 'widowed',
    ];
    return $msData[$id];
}

function expandSSCEStatus($id){
    $ssceStatus = [
        1 => 'I have result',
        2 => "I don't have Result",
    ];
    return $ssceStatus[$id];
}

function expandProgramType($id){
    $data = [
        '1' => 'PGD',
        '2' => 'M.Sc.',
        '3' => 'MBA',
    ];
    return $data[$id];
}

function expandStudyMode($id){
    $data = [
        '1' => 'Full time',
        '2' => 'Part Time',
    ];
    return $data[$id];
}

function expandRelationship($id){
    $data = [
        1 => 'Brother',
        2 => 'Sister',
        3 => 'Mother',
        4 => 'Father',
        5 => 'Uncle',
        6 => 'Aunt',
        7 => 'Cousin',
        8 => 'Nephew',
    ];
    return $data[$id];
}

function expandExamGrade($id){
    $gradeData = [
        1 => 'A1',
        2 => 'B2',
        3 => 'B3',
        4 => 'C4',
        5 => 'C5',
        6 => 'C6',
        7 => 'D7',
        8 => 'E8',
        9 => 'F9',
    ];
    return $gradeData[$id];
}

function expandCountry($id){
    $country = DB::table('countries')->where('id',$id)->first();
    return $country ? $country->country_name : '';
}

function expandState($id){
    $state = DB::table('states')->where('id',$id)->first();
    return $state ? $state->state_name : '';
}

function expandExamType($id){
    $exam = DB::table('exam_types')->where('id',$id)->first();
    return $exam ? $exam->exam_type : '';
}

function expandExamSubject($id){
    $subject = DB::table('olevel_subjects')->where('id',$id)->first();
    return $subject ? $subject->subject_name : '';
}

function expandProgramOfStudy($id){
    $course = DB::table('courses')->where('id',$id)->first();
    return $course ? $course->course_name : '';
}

