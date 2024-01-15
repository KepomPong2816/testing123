<?php

namespace App\Models;

use CodeIgniter\Model;

class Peserta extends Model
{
    protected $table = 'peserta';

    protected $allowedFields = ['id_event', 'id_user'];

    public function saveuser($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function showuser($idevent)
    {
        return $this->where('id_event', $idevent)->first();
    }
}
