<?php

namespace App\Models;

use CodeIgniter\Model;

class MyEventMod extends Model
{
    protected $table = 'event';

    protected $primaryKey = 'id_event'; // Primary key tabel pengguna
    protected $allowedFields = ['id_user', 'title', 'date_column', 'time', 'organizer', 'type_sport', 'participant', 'location', 'upload', 'price', 'kategori']; // Kolom yang dapat diisi pada tabel pengguna

    public function getUserById($id)
    {
        return $this->where('id_user', $id)->first();
    }

    public function getUserByEvnt($id)
    {
        return $this->where('id_event', $id)->first();
    }

    public function getUserById2($id)
    {
        return $this->where('id_user', $id)->find('13');
    }

    public function getexpertslug($slug)
    {
        return $this->where('id_event', $slug)->first();
    }
}
