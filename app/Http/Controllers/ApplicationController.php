<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Nok;
use App\ProgrammeCourse;
use App\ProgrammeFaculty;
use App\ProgrammeType;
use App\Qualification;
use Illuminate\Http\Request;
use App\Http\Requests\PersonalDetailRequest;
use App\Http\Requests\NewNokRequest;
use App\Http\Requests\OLevelResultRequest;
use App\Http\Requests\QualificationsRequest;
use App\Http\Requests\ProgrammesFormValidation;

use App\PersonalDetail;

use App\OLevelResult;
use App\OLevelExam;
use App\Programme;

class ApplicationController extends Controller {


    public function __construct()
    {
        parent::__construct();
    }

    public function getPersonal(PersonalDetail $personal)
    {
        $personal = $personal->getPersonalDetails();
        return view('personal_details')
                ->with(compact('personal'));
    }

    public function getNok(Nok $nok)
    {
        $nok = $nok->getNokDetails();

        return view('nok_details')
                ->with(compact('nok'));
    }

    public function getSsce(OLevelResult $result, OLevelExam $exams)
    {
        $result = $result->getOLevelResults();
        $exams = $exams->getOLevelExams();

        return view('ssce_details')
                ->with('sn',1)
                ->with(compact('result'))
                ->with(compact('exams'));
    }

    public function getQualifications(Qualification $qualification)
    {
        $qualifications = $qualification->getQualifications();
        return view('qualifications')
                ->with('sn',1)
                ->with(compact('qualifications'));
    }

    public function getProgrammes(Programme $programme)
    {
        $programme = $programme->getProgrammeDetails();
        return view('programmes')
                ->with(compact('programme'));
    }

    public function getProgrammeTypes(ProgrammeType $programmeType)
    {
        return $programmeType->all()->toJson();
    }

    public function getProgrammeFaculties(ProgrammeFaculty $programmeFaculty)
    {
        return $programmeFaculty->all()->toJson();
    }
    public function getProgrammeOfStudy(Request $request, ProgrammeCourse $programmeCourse)
    {
        $programeTypeId = $request->get('programme_type_id');
        $programmeFacultyId = $request->get('programme_faculty_id');
        return $programmeCourse->getProgrammeOfStudyCourses($programeTypeId,$programmeFacultyId);
    }

    public function getDeleteExam($id, OLevelExam $exam){
        $deleteExam = $exam->deleteExam((int) $id);

        if(!$deleteExam) {
            return redirect()->back()
                ->with('notification_type','danger')
                ->with('notification_message','An error occurred while deleting the exam!');
        }
        return redirect()->back()
            ->with('notification_type','success')
            ->with('notification_message','Exam deleted Successfully!');

    }

    public function getDeleteQualification($id, Qualification $qualification){
        $deleteQualification = $qualification->deleteQualification((int) $id);

        if(!$deleteQualification) {
            return redirect()->back()
                ->with('notification_type','danger')
                ->with('notification_message','An error occurred while deleting the qualification!');
        }
        return redirect()->back()
            ->with('notification_type','success')
            ->with('notification_message','Qualification deleted Successfully!');

    }

    public function postPersonal(PersonalDetailRequest $request, PersonalDetail $personal)
    {
        $personalDetail = $personal->savePersonalDetail($request->all());

        if(!$personalDetail) {
            return redirect()->back()
                ->with('notification_type','danger')
                ->with('notification_message','An error occurred while saving your Personal Details!');
        }
        return redirect()->back()
                ->with('notification_type','success')
                ->with('notification_message','Personal Details Saved Successfully!');

    }

    public function postNok(NewNokRequest $request, Nok $nok)
    {
        $nokDetail = $nok->saveNok($request->all());

        if(!$nokDetail) {
            return redirect()->back()
                ->with('notification_type','danger')
                ->with('notification_message','An error occurred while saving your Next of Kin Details!');
        }
        return redirect()->back()
            ->with('notification_type','success')
            ->with('notification_message','Next of Kin Details Saved Successfully!');

    }

    public function postSsce(OLevelResultRequest $request, OLevelResult $result)
    {
        $resultDetail = $result->saveOLevelResult($request->all());

        if(!$resultDetail) {
            return redirect()->back()
                ->with('notification_type','danger')
                ->with('notification_message','An error occurred while saving your SSCE Details!');
        }
        return redirect()->back()
            ->with('notification_type','success')
            ->with('notification_message','SSCE Details Saved Successfully!');

    }

    public function postOLevelExam(Request $request, OLevelExam $exam)
    {
        $examDetail = $exam->saveOLevelExam($request->all());

        if(!$examDetail) {
            return redirect()->back()
                ->with('notification_type','danger')
                ->with('notification_message','An error occurred while saving the result!');
        }
        return redirect()->back()
            ->with('notification_type','success')
            ->with('notification_message','Result Saved Successfully!');

    }

    public function postQualification(QualificationsRequest $request, Qualification $qualification)
    {
        $qualificationDetail = $qualification->saveQualification($request->all());

        if(!$qualificationDetail) {
            return redirect()->back()
                ->with('notification_type','danger')
                ->with('notification_message','An error occurred while saving the qualification!')
                ->withInput();
        }
        return redirect()->back()
            ->with('notification_type','success')
            ->with('notification_message','Qualification Saved Successfully!');

    }

    public function postProgramme(ProgrammesFormValidation $request, Programme $programme)
    {
        $programmeDetail = $programme->saveProgramme($request->all());

        if(!$programmeDetail) {
            return redirect()->back()
                ->with('notification_type','danger')
                ->with('notification_message','An error occurred while saving the programme of study!')
                ->withInput();
        }
        return redirect()->back()
            ->with('notification_type','success')
            ->with('notification_message','Programme of study Saved Successfully!');

    }

    public function postPassportPhoto(Request $request, PersonalDetail $personal)
    {
        $this->validate($request,[
            'passport' => 'required|mimes:jpg,jpeg,png,bmp'
        ]);

        $upload = $personal->uploadPassportPhoto($request);

        if(!$upload){
            return response()->json(['error' => 'Error occurred while uploading Passport Photo'],500);
        } else {
            return response()->json(['success' => 'Passport Uploaded Successfully!'],201);
        }
    }

}
