<?php

use Larabook\Forms\RegistrationForm;
use Larabook\Registration\RegisterUserCommand;
use Larabook\Core\CommandBus;

class RegistrationController extends BaseController {

	use CommandBus;

	/**
	 * @var Registrationform
	 */
	private $RegistrationForm;

	/**
	 * Constructor
	 *
	 * @param RegistrationForm $RegistrationForm
	 *
	 */
	function __construct(RegistrationForm $RegistrationForm){

		$this->RegistrationForm = $RegistrationForm;

		$this->beforeFilter('guest');

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

		extract(Input::only('username', 'email', 'password'));
		
		$user = $this->execute(
			new RegisterUserCommand($username, $email, $password)
		);

		Auth::login($user);

		Flash::overlay('Glad to have you as a new Larabook member');
		
		return Redirect::home();

	}

}
