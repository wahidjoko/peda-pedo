<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAktivasi extends Model
{
	public function editData($data)
	{
		$this->db->table('tbl_user')
			->where('id', $data['aktivasi'])
			->update($data);
	}
}
