<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
	public function index()
	{
	}

	public function login()
	{
		echo view('v_admin-login');
	}
}
