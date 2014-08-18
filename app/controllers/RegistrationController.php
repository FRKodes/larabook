<?php

use Larabook\Forms\RegistrationForm;

class RegistrationController extends \BaseController {

	private $RegistrationForm;

	function __construct(RegistrationForm $RegistrationForm){

		$this->RegistrationForm = $RegistrationForm;

	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('registration.create');
	}

	public function store ()
	{
		$this->RegistrationForm->validate(Input::all());
		$user = User::create(
			Input::only('username', 'email', 'password')
			);
		Auth::login($user);
		return Redirect::home();
	}

}
