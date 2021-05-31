<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class Daftar extends BaseController
{
	public function __construct()
	{
		helper('form');
		$this->ModelUser = new ModelUser();
	}

	public function index()
	{
		$data = [
			'title' => 'Peda-Pedo',
			'subtitle' => 'Daftar',
			'validation' =>  \Config\Services::validation(),
		];
		echo view('v_daftar', $data);
	}

	public function simpan()
	{
		if ($this->validate(
			[
				'nik' => [
					'label' => 'NIK',
					'rules'  => 'required',
					'errors' => [
						'required' => '{field} Wajib Diisi !!',
						'max_length' => '{field} Max 16 Karakter !!',
						// 'is_unique' => '{field} Ini Sudah Terdaftar !!',
					]
				],
				'no_telp'    => [
					'label' => 'No Handphone',
					'rules'  => 'required',
					'errors' => [
						'required' => '{field} Wajib Diisi !!'
					]
				],
				'email'    => [
					'label' => 'Alamat Email',
					'rules'  => 'required',
					'errors' => [
						'required' => '{field} Wajib Diisi !!'
					]
				],
				'password'    => [
					'label' => 'Password',
					'rules'  => 'required',
					'errors' => [
						'required' => '{field} Wajib Diisi !!'
					]
				],
				'repassword'    => [
					'label' => 'Re-Password',
					'rules'  => 'matches[password]',
					'errors' => [
						'required' => '{field} Wajib Diisi !!'
					]
				],
			]
		)) {
			$data = [
				'nik' => $this->request->getPost('nik'),
				'no_telp' => $this->request->getPost('no_telp'),
				'email' => $this->request->getPost('email'),
				'password' => $this->request->getPost('repassword'),
			];
			$this->ModelUser->insertData($data);
			session()->setFlashdata('pesan', 'Pendaftaran akun berhasil,silahkan untuk Aktivasi Akun');
			return redirect()->to('/Aktivasi');
		} else {
			//jika ada validasi
			$validation =  \Config\Services::validation();
			return redirect()->to('/Daftar')->withInput()->with('validation', $validation);
		}
	}
}
