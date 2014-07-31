<?php

class UserController extends BaseController {

	public function signup()
	{
		print_r('ok');
	}

	public function postRegister()
	{
		$input = Input::all();

		if (!isset($input['email']) || !isset($input['password']))
		{
			return Response::json('Invalid email or password');
		}

	}

}
