<?php

namespace App\Models;

use CodeIgniter\Model;

class Eventm extends Model
{
    protected $table = 'event';
    public function saveuser($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
}
