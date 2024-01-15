<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\AdminAll;
use App\Models\MyEventMod;

class Home extends BaseController
{
    protected $session;
    public function home()
    {
        $session = session();
        $userModel = new user();
        $MyEvent = new MyEventMod();
        $namaPengguna = $session->get('id');
        
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'Mid-server-7YQmR2bUiU8d6iZdI9RqlRvu';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = true;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        if (!$session->has('id')) {
            $latestProducts = $MyEvent->findAll(3);
            $data = [
                'compe' => $latestProducts,
                'title' => 'Home',
            ];
            echo view("home", $data);
        } else {
            $userModel = new user();
            $user = $userModel->getUserById($namaPengguna);
            $latestProducts = $MyEvent->findAll(3);
            $params1 = array(
                'transaction_details' => array(
                    'order_id' => rand(),
                    'gross_amount' => 1,
                ),
                'customer_details' => array(
                    'first_name' => $user['nama'],
                    'last_name' => '',
                    'email' => $user['email'].'@gmail.com',
                    'phone' => '08515333',
                ),
            );
            $params2 = array(
                'transaction_details' => array(
                    'order_id' => rand(),
                    'gross_amount' => 5,
                ),
                'customer_details' => array(
                    'first_name' => 'roji',
                    'last_name' => '',
                    'email' => 'roji@gmail.com',
                    'phone' => '08515333',
                ),
            );
            $params3 = array(
                'transaction_details' => array(
                    'order_id' => rand(),
                    'gross_amount' => 3,
                ),
                'customer_details' => array(
                    'first_name' => 'varis',
                    'last_name' => '',
                    'email' => 'varis@gmail.com',
                    'phone' => '08515333',
                ),
            );
            $data = [
                'nama' => $user['nama'],
                'id' => $namaPengguna,
                'compe' => $latestProducts,
                'title' => 'Home',
                'snapToken1' => \Midtrans\Snap::getSnapToken($params1),
                'snapToken2' => \Midtrans\Snap::getSnapToken($params2),
                'snapToken3' => \Midtrans\Snap::getSnapToken($params3)
            ];
            echo view("home", $data);
        }
    }

    public function login()
    {
        return view('login');
    }

    public function reg()
    {
        return view('register');
    }

    public function ww()
    {
        return view('index');
    }

    public function form()
    {
        $session = session();
        if (!$session->has('id')) {
            $data = [
                'title' => 'Login'
            ];
            echo view("login", $data);
        } else {
            $namaPengguna = $session->get('id');
            $userModel = new user();
            $user = $userModel->getUserById($namaPengguna);
            $data = [
                'nama' => $user['nama'],
                'id' => $namaPengguna,
                'title' => 'event'
            ];
            echo view("createCOMP", $data);
        }
    }

    public function list()
    {
        return view('list');
    }

    public function event()
    {
        $session = session();
        if (!$session->has('id')) {
            $data = [
                'title' => 'Login'
            ];
            echo view("login", $data);
        } else {
            $namaPengguna = $session->get('id');
            $userModel = new user();
            $user = $userModel->getUserById($namaPengguna);
            $data = [
                'nama' => $user['nama'],
                'id' => $namaPengguna,
                'title' => 'event'
            ];
            echo view("event", $data);
        }
    }

    public function dt()
    {
        $session = session();
        if (!$session->has('id')) {
            $data = [
                'title' => 'Login'
            ];
            echo view("login", $data);
        } else {
            $namaPengguna = $session->get('id');
            $userModel = new user();
            $user = $userModel->getUserById($namaPengguna);
            $data = [
                'nama' => $user['nama'],
                'id' => $namaPengguna,
                'id_event' => $this->request->getPost('hh'),
                'title' => 'event'
            ];
            echo view("detailTour", $data);
        }
    }

    public function join()
    {
        return view('join');
    }

    public function setting()
    {
        return view('setting');
    }
}
