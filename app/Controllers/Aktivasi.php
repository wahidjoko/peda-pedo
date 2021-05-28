<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Aktivasi extends BaseController
{
	public function __construct()
	{
		helper('form');
	}

	public function index()
	{
		$data = [
			'title' => 'Peda-Pedo',
			'subtitle' => 'Aktivasi',
			'validation' =>  \Config\Services::validation(),
		];
		echo view('v_aktivasi', $data);
	}

	public function simpanOTP()
	{
		$data = [
			'otp' => $this->request->getPost('otp'),
		];
		// $this->ModelUser->insertData($data);
		session()->setFlashdata('pesan', 'Aktivasi Behasil, Silahkan Login Aplikasi !!!');
		return redirect()->to('/Aktivasi');
	}
}
