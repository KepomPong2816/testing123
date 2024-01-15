<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\MyEventMod;
use App\Models\Eventm;

class Login extends BaseController
{
    protected $session;
    // public function index()
    // {
    //     $session = session();
    //     $MyEvent = new MyEventMod();
    //     $namaPengguna = $session->get('id');
    //     $latestProducts = $MyEvent->findAll(3);
    //     if (!$session->has('id')) {

    //         $data = [
    //             'compe' => $latestProducts,
    //             'title' => 'Log In'
    //         ];
    //         echo view("home", $data);
    //     } else {
    //         $userModel = new user();
    //         $user = $userModel->getUserById($namaPengguna);
    //         $data = [
    //             'nama' => $user['nama'],
    //             'id' => $namaPengguna,
    //             'compe' => $latestProducts,
    //             'title' => 'Log In'
    //         ];
    //         echo view("home", $data);
    //     }
    // }

    public function login()
    {
        $email = $this->request->getPost('username');
        $password = $this->request->getPost('pass');
        $userModel = new User();
        $user = $userModel->getUserByEmail($email);
        if (!is_null($user) && $user['email'] == $email && $user['password'] == $password) {
            // Login berhasil, simpan informasi pengguna ke dalam session
            $laa = "laa";
            if ($email == $laa) {
                $session = session();
                $session->set('id', $user['id_user']);
                return redirect()->to(base_url('/admin/dashboard'));
            }else{
                $session = session();
                $session->set('id', $user['id_user']);
                return redirect()->to(base_url('/'));
            }
        } else {
            echo "<script>alert('Email atau password salah.');</script>";
            echo "<script>window.location.href = '" . base_url('/login') . "';</script>";
            exit;
        }
    }

    public function logout()
    {
        // Hapus informasi pengguna dari session saat logout
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }

    public function add()
    {
        $model = new User();
        $nama = $this->request->getPost("nama");
        $email = $this->request->getPost("email");
        $password = $this->request->getPost("password");
        $retypePassword = $this->request->getPost("repass"); // Added line to get re-typed password

        // Check if passwords match
        if ($password !== $retypePassword) {
            echo '<script>
                alert("Password tidak cocok. Silakan coba lagi.");
                window.location="' . base_url('/reg') . '"
            </script>';
            exit;
        }

        // If passwords match, proceed with creating the new user
        $data = array(
            'nama' => $nama,
            'email' => $email,
            'password' => $password,
            'jenis' => "1"
        );
        $model->saveuser($data);

        echo '<script>
            alert("Selamat! Berhasil Menambah Data ");
            window.location="' . base_url('/login') . '"
        </script>';
    }
}
