<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
	public function insertData($data)
	{
		$this->db->table('tbl_user')
			->insert($data);
	}
}
