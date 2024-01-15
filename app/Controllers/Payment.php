<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\TradeModel;

class Payment extends BaseController
{
    public function addTransaction()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $myVariable = $_POST['myVariable'];
            $session = session();
            $user = new User();

            $namaPengguna = $session->get('id');
            $sub = $session->get('sub');

            $db = \Config\Database::connect();
            $db->table('user')->where('id_user', $namaPengguna,)->update(['sub' => $sub]);

            echo '<script>
            alert("Selamat! Berhasil Menambah Data ");
            window.location="' . base_url('/') . '"
        </script>';
        }
    }
}
