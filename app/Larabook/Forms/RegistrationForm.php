<?php namespace Larabook\Forms;

use Laracasts\Validation\FormValidator;

class Registrationform extends FormValidator{

	/**
	 * Rules for the validation form
	 */
	protected $rules = [
		"username" 	=> "required|unique:users",
		"email"		=> "required|email|unique:users",
		"password"	=> "required|confirmed"
	];
}