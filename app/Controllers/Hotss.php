<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\MyEventMod;

class Hotss extends BaseController
{
    public function index()
    {
        $session = session();
        $userModel = new user();
        $MyEvent = new MyEventMod();
        $namaPengguna = $session->get('id');

        $latestProducts = $MyEvent->findAll();
        // if (!$session->has('id')) {
            // $data = [
            //     'title' => 'Login'
            // ];
            // echo view("login", $data);
        // } else {
            if (!$session->has('id')) {
                $user = $userModel->getUserById($namaPengguna);
                $data = [
                    'compe' => $latestProducts,
                    // 'nama' => $user['nama'],
                    'id' => $namaPengguna,
                    'title' => 'event'
                ];
                echo view("allevent", $data);
            } else {
                $user = $userModel->getUserById($namaPengguna);
                $data = [
                    'nama' => $user['nama'],
                    'id' => $namaPengguna,
                    'compe' => $latestProducts,
                    'title' => 'event'
                ];
                echo view("allevent", $data);
            }
        // }
    }
}
