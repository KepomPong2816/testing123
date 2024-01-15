<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\MyEventMod;

class MyEvent extends BaseController
{
    public function index()
    {
        $session = session();
        $userModel = new user();
        $MyEvent = new MyEventMod();
        $namaPengguna = $session->get('id');

        $latestProducts = $MyEvent->where('id_user', $namaPengguna)->orderBy('id_event', 'DESC')->findAll();
        if (!$session->has('id')) {
            $data = [
                'title' => 'Login'
            ];
            echo view("login", $data);
        } else {
            if (!empty($latestProducts)) {
                $user = $userModel->getUserById($namaPengguna);
                $data = [
                    'compe' => $latestProducts,
                    'nama' => $user['nama'],
                    'id' => $namaPengguna,
                    'title' => 'event1'
                ];
                echo view("event", $data);
            } else {
                $user = $userModel->getUserById($namaPengguna);
                $data = [
                    'nama' => $user['nama'],
                    'id' => $namaPengguna,
                    'title' => 'event2',
                    'compe' => "",
                ];
                echo view("event", $data);
            }
        }
    }

    public function event()
    {
    }
}
