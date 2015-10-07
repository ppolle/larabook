<?php

class RegistrationController extends \BaseController {

	/**
	 * Show a form to register the user.
	 *
	 *
	 **/


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('registration.create');
	}

	public function store()
	{
		$user = User::create(
			Input::only('username','email','password')
		);

		Auth::login($user);

		return Redirect::home();
	}






}
