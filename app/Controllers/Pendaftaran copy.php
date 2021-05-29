<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pendaftaran extends BaseController
{
	public function __construct()
	{
		helper('form');
	}

	public function index()
	{
		$data = [
			'title' => 'Peda-Pedo',
			'subtitle' => 'Pedaftaran',
			'validation' =>  \Config\Services::validation(),
		];
		echo view('v_pendaftaran', $data);
	}

	public function simpanPendaftaran()
	{
		if ($this->validate(
			[
				'nik' => [
					'label' => 'NIK',
					'rules'  => 'required|min_length[16]',
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
			//jika tidak ada validasi maka simpan data
			$data = [
				'nik' => $this->request->getPost('nisn'),
				'no_telp' => $this->request->getPost('no_telp'),
				'email' => $this->request->getPost('email'),
				'password' => $this->request->getPost('password'),
			];
			// $this->ModelUser->insertData($data);
			session()->setFlashdata('pesan', 'Pendaftaran Behasil, Silahkan Aktivasi Akun Anda !!!');
			return redirect()->to('/Aktivasi');
		} else {
			//jika ada validasi
			$validation =  \Config\Services::validation();
			return redirect()->to('/Aktivasi')->withInput()->with('validation', $validation);
		}
	}
}
