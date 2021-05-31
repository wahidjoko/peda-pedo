<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAuth;

class Auth extends BaseController
{
	public function __construct()
	{

		$this->ModelAuth = new ModelAuth();
		helper('form');
	}

	public function index()
	{
	}

	public function login()
	{
		echo view('v_admin-login');
	}

	public function loginUser()
	{
		$data = [
			'title' => 'Peda-Pedo',
			'subtitle' => 'Login User',
			'validation' =>  \Config\Services::validation(),
		];
		return view('v_user-login', $data);
	}

	public function cek_login_user()
	{
		if ($this->validate([
			'nik' => [
				'label' => 'NIK',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Wajib Diisi !!',
				]
			],
			'password' => [
				'label'	=> 'Password',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Wajib Diisi !!',
				],
			]
		])) {
			//valid
			$nik =  $this->request->getPost('nik');
			$password =  $this->request->getPost('password');
			$cek_login = $this->ModelAuth->login_user($nik, $password);

			if ($cek_login) {
				session()->set('nik', $cek_login['NIK']);
				session()->set('password', $cek_login['PASSWORD']);
				session()->set('level', 'user');
				return redirect()->to('/Admin');
			} else {
				session()->setFlashdata('pesan', 'NIK Atau Password Salah !!!');
				return redirect()->to('/Auth/loginUser');
			}
		} else {
			//tidak valid
			$validation =  \Config\Services::validation();
			return redirect()->to('/Auth/loginUser')->withInput()->with('validation', $validation);;
		}
	}

	public function logout()
	{
		session()->remove('nik');
		session()->remove('password');
		session()->remove('level');
		session()->setFlashdata('pesan', 'Logout Success');
		return redirect()->to(base_url('auth/loginUser'));
	}
}
