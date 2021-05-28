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
		if ($this->validate(
			[
				'aktivasi' => [
					'label' => 'Kode Aktivasi',
					'rules'  => 'required',
					'errors' => [
						'required' => '{field} Wajib Diisi !!',
						'max_length' => '{field} Max 16 Karakter !!',
						// 'is_unique' => '{field} Ini Sudah Terdaftar !!',
					]
				],
			]
		)) {
			$data = [
				'aktivasi' => $this->request->getPost('aktivasi'),
			];
			// $this->ModelUser->insertData($data);
			session()->setFlashdata('pesan', 'Aktivasi Behasil, Silahkan Login Aplikasi !!!');
			return redirect()->to('/Aktivasi');
		} else {
			//jika ada validasi
			$validation =  \Config\Services::validation();
			return redirect()->to('/Aktivasi')->withInput()->with('validation', $validation);
		}
	}
}
