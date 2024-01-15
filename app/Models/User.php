<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'user';

    public function getuser($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function saveuser($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
    protected $primaryKey = 'id_user'; // Primary key tabel pengguna
    protected $allowedFields = ['email', 'password', 'nama']; // Kolom yang dapat diisi pada tabel pengguna

    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
    public function getUserById($id)
    {
        return $this->where('id_user', $id)->first();
    }
}
