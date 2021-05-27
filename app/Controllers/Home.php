<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Peda-Pedo',
			'subtitle' => 'Home'
		];
		return view('v_home', $data);
	}
}
