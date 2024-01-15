<?php

namespace App\Models;

use CodeIgniter\Model;

class Juara extends Model
{
    protected $table = 'juara';
    protected $primaryKey = 'id_juara';
    protected $allowedFields = ['id_event', 'id_user-semi1', 'id_user-semi2', 'id_user-semi3', 'id_user-semi4', 'id_user-final1', 'id_user-final1'];
    public function saveuser($wew)
    {
        $builder = $this->db->table($this->table);

        // Cek apakah data sudah ada dalam database berdasarkan kriteria tertentu
        // Misalnya, kita asumsikan ada kolom bernama "username" dalam tabel, dan kita ingin memeriksa keberadaan username.
        $existingData = $builder->getWhere(['id_event' => $wew['id_event']])->getResult();

        if (!empty($existingData)) {
            // Jika data sudah ada, Anda dapat mengambil tindakan yang sesuai di sini.
            // Misalnya, Anda dapat mengembalikan pesan atau nilai tertentu, atau hanya mengabaikan aksi tambahan.
            return 'Data already exists';
        } else {
            // Jika data belum ada, lakukan operasi insert
            return $builder->insert($wew);
        }
    }
}
