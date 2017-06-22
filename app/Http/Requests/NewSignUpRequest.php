<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class NewSignUpRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'username' => 'required|alpha_dash|unique:users',
			'password' => 'required|confirmed|min:5',
			'firstname' => 'required|min:3',
			'lastname' => 'required|min:3',
			'email' => 'required|email',
			'pin' => 'required|exists:pins,pincode,status,0',
		];
	}
	
	public function messages()
	{
	    return [
			'pin.exists' => 'The PIN is invalid or has already been used.'
		];
	}

}
