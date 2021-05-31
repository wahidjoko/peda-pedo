<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
	public function login_user($nik, $password)
	{
		return $this->db->table('tbl_user')->where(
			[
				'NIK' => $nik,
				'PASSWORD' => $password
			]
		)->get()->getRowArray();
	}
}
