<?php

namespace App\Models;

use CodeIgniter\Model;

class TradeModel extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'no';

    protected $allowedFields = ['name', 'email', 'type_subscribtion', 'gross_ammount', 'statustransaction', 'created', 'updated'];

    public function created_transaction($data){
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function updated_transaction(){
        // Do It After Snap completed
    }
}