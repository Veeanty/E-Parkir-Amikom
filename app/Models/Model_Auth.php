<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Auth extends Model
{
    protected $table = 'tbl_user'; // Table name for user registration

    public function save_register($data)
    {
        // Insert the data into the 'tbl_user' table
        $this->db->table($this->table)->insert($data);
    }
}
