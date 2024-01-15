<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminAll extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['nama', 'email'];

    // transaksi_admin
    public function transaksi()
    {
        // 
    }
}
