<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
use App\Pin;
use Illuminate\Support\Facades\Auth;
use App\PersonalDetail;
use App\Http\Requests\NewSignUpRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\PasswordResetRequest;
use App\Http\Requests\NewPasswordResetRequest;

use App\Nok;
use App\OLevelExam;
use App\OLevelResult;
use App\Programme;
use App\Qualification;



class HomeController extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
	    return view('home');
	}

	public function dashboard()
	{
	    return view('dashboard');
	}

	public function getLogin()
	{
	    return view('login');
	}

	public function getPrintApplication(
        PersonalDetail $personalDetail,
        Programme $programme,
        OLevelResult $result,
        OLevelExam $exam,
        Nok $nok,
        Qualification $qualification
	)
	{
        $personal = $personalDetail->getPersonalDetails();
        $programme = $programme->getProgrammeDetails();
        $nok = $nok->getNokDetails();
        $result = $result->getOLevelResults();
        $exams = $exam->getOLevelExams();
        $qualifications = $qualification->getQualifications();

	    return view('print')
            ->with(compact('personal'))
            ->with(compact('programme'))
            ->with(compact('nok'))
            ->with(compact('result'))
            ->with(compact('exams'))
            ->with(compact('qualifications'));
	}

	public function getSignup()
	{
	    return view('signup');
	}

    public function getPasswordReset()
    {
        return view('reset_password');
    }

    public function getPasswordResetUrl($token)
    {
        return view('reset_new_password')
            ->with(compact('token'));
    }

    public function logout()
	{
	    Auth::logout();
		return redirect()->route('login');
	}

	public function postLogin(LoginRequest $request, User $userLogin)
	{
        $login = $userLogin->loginUser($request->all());
        if($login){
            return redirect()->intended(route('dashboard'))
                ->with('notification_type','success')
                ->with('notification_message','You have successfully Signed In!');

        } else {
            return redirect()->back()
                    ->withInput()
                    ->with('notification_type','danger')
                    ->with('notification_message','Username/Password combination is invalid!');
        }
	}

	public function postSignup(NewSignUpRequest $request, User $user, PersonalDetail $personalDetail, Pin $pin)
	{
        $signup = $user->signupUser($request->all(), $personalDetail, $pin);

        if(!$signup){
            return redirect()->back()
                ->with('notification_type','danger')
                ->with('notification_message','An error occurred while creating the account, please try again!');
        } else {
            return redirect()->intended(route('login'))
                ->with('notification_type','success')
                ->with('notification_message','You have successfully created an account!');
        }
	}

	public function postPasswordReset(PasswordResetRequest $request, User $user)
	{
        $reset = $user->generateResetToken($request->all());

        if(!$reset){
            return redirect()->back()
                ->with('notification_type','danger')
                ->with('notification_message','Your Username does not match any account we have on record, please check your spelling and try again!');
        } else {
            // Redirect to thank You Page
            return view('reset_password_success')
                ->with(compact('reset'));
        }
	}

	public function postNewPasswordReset(NewPasswordResetRequest $request, User $user)
	{
        $resetPassword = $user->resetPassword($request->all());

        if(!$resetPassword){
            return redirect()->back()
                ->with('notification_type','danger')
                ->with('notification_message','An error occurred while resetting your password, please try again!');
        } else {
            return redirect()->route('login')
                ->with('notification_type','success')
                ->with('notification_message','Your password was reset successfully, login below!');
            ;
        }
	}

}
