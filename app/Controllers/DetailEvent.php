<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\MyEventMod;
use App\Models\Peserta;
use App\Models\Juara;


class DetailEvent extends BaseController
{
    public function index($idevent)
    {
        $session = session();
        $userModel = new user();
        $MyEvent = new MyEventMod();
        $peserta = new Peserta();
        $jjura = new Juara();
        $namaPengguna = $session->get('id');
        $selectedevent = $MyEvent->where('id_event', $idevent)->findAll();
        $HH = $jjura->where('id_event', $idevent)->findAll();
        $semi1 = $HH[0]['id_user-semi1'];
        $semi2 = $HH[0]['id_user-semi2'];
        $semi3 = $HH[0]['id_user-semi3'];
        $semi4 = $HH[0]['id_user-semi4'];
        $final5 = $HH[0]['id_user-final1'];
        $final6 = $HH[0]['id_user-final2'];
        $j2 = $HH[0]['j2'];
        $j1 = $HH[0]['j1'];
        $j3 = $HH[0]['j3'];
        if (!$session->has('id')) {
            $peserta1 = $peserta->where('id_event', $idevent)->findAll();
            $primaryKeys = array_column($peserta1, 'id_user');
            $countPeserta1 = count($peserta1);
            $showJoinButton = $countPeserta1 < 8;
            // Ambil data dari tabel_lain berdasarkan primary key yang terkait dengan peserta1
            $tabelLainData = [];
            if (!empty($primaryKeys)) {
                $tabelLainData = $userModel->whereIn('id_user', $primaryKeys)->findAll();
            }
            $semii1 = $userModel->getUserById($semi1);
            $semii2 = $userModel->getUserById($semi2);
            $semii3 = $userModel->getUserById($semi3);
            $semii4 = $userModel->getUserById($semi4);
            $semii5 = $userModel->getUserById($final5);
            $semii6 = $userModel->getUserById($final6);
            $jj2 = $userModel->getUserById($j2);
            $jj1 = $userModel->getUserById($j1);
            $jj3 = $userModel->getUserById($j3);
            $user = $userModel->getUserById($namaPengguna);
            $MyEvent = new MyEventMod();
            $latestProducts = $MyEvent->getexpertslug('hh');
            $data = [
                'compe' => $tabelLainData,
                'HH1' => $semii1,
                'HH2' => $semii2,
                'HH3' => $semii3,
                'HH4' => $semii4,
                'HH5' => $semii5,
                'HH6' => $semii6,
                'HH7' => $jj2,
                'HH8' => $jj1,
                'HH9' => $jj3,
                'bra' => $tabelLainData,
                'selectedevent' => $selectedevent,
                // 'nama' => $user['nama'],
                // 'id_user' => $user['id_user'],
                'isi' => $latestProducts,
                'title' => 'event',
                'show_join_button' => $showJoinButton
            ];
            echo view("detailTour", $data);
        } else {
            $peserta1 = $peserta->where('id_event', $idevent)->findAll();
            $primaryKeys = array_column($peserta1, 'id_user');
            $countPeserta1 = count($peserta1);
            $showJoinButton = $countPeserta1 < 8;
            // Ambil data dari tabel_lain berdasarkan primary key yang terkait dengan peserta1
            $tabelLainData = [];
            if (!empty($primaryKeys)) {
                $tabelLainData = $userModel->whereIn('id_user', $primaryKeys)->findAll();
            }
            $semii1 = $userModel->getUserById($semi1);
            $semii2 = $userModel->getUserById($semi2);
            $semii3 = $userModel->getUserById($semi3);
            $semii4 = $userModel->getUserById($semi4);
            $semii5 = $userModel->getUserById($final5);
            $semii6 = $userModel->getUserById($final6);
            $jj2 = $userModel->getUserById($j2);
            $jj1 = $userModel->getUserById($j1);
            $jj3 = $userModel->getUserById($j3);
            $user = $userModel->getUserById($namaPengguna);
            $MyEvent = new MyEventMod();
            $latestProducts = $MyEvent->getexpertslug('hh');
            $data = [
                'compe' => $tabelLainData,
                'HH1' => $semii1,
                'HH2' => $semii2,
                'HH3' => $semii3,
                'HH4' => $semii4,
                'HH5' => $semii5,
                'HH6' => $semii6,
                'HH7' => $jj2,
                'HH8' => $jj1,
                'HH9' => $jj3,
                'bra' => $tabelLainData,
                'selectedevent' => $selectedevent,
                'nama' => $user['nama'],
                'id_user' => $user['id_user'],
                'isi' => $latestProducts,
                'title' => 'event',
                'show_join_button' => $showJoinButton
            ];
            echo view("detailTour", $data);
        }
    }

    public function peserta($idevent)
    {
        $session = session();
        $userModel = new user();
        $MyEvent = new MyEventMod();
        $peserta = new Peserta();
        $jjura = new Juara();
        $namaPengguna = $session->get('id');

        $selectedevent = $MyEvent->where('id_event', $idevent)->findAll();
        if (!$session->has('id')) {
            return redirect()->to(base_url('/home'));
        } else {
            $peserta1 = $peserta->where('id_event', $idevent)->findAll();
            $primaryKeys = array_column($peserta1, 'id_user');
            $countPeserta1 = count($peserta1);
            $showJoinButton = $countPeserta1 < 8;
            // Ambil data dari tabel_lain berdasarkan primary key yang terkait dengan peserta1
            $tabelLainData = [];
            if (!empty($primaryKeys)) {
                $tabelLainData = $userModel->whereIn('id_user', $primaryKeys)->findAll();
            }
            $user = $userModel->getUserById($namaPengguna);
            $MyEvent = new MyEventMod();
            $latestProducts = $MyEvent->getexpertslug('hh');
            $wew = [
                'id_event' => $idevent,
            ];
            $jjura->saveuser($wew);
            $data = [
                'compe' => $tabelLainData,
                'bra' => $tabelLainData,
                'selectedevent' => $selectedevent,
                'nama' => $user['nama'],
                'id_user' => $user['id_user'],
                'isi' => $latestProducts,
                'title' => 'event',
                'show_join_button' => $showJoinButton
            ];
            echo view("detaileventp", $data);
        }
    }

    public function list($idevent)
    {
        $session = session();
        $userModel = new user();
        $MyEvent = new MyEventMod();
        $namaPengguna = $session->get('id');

        $selectedevent = $MyEvent->where('type_sport', $idevent)->findAll();
        if (!$session->has('id')) {
            $data = [
                'title' => 'Login'
            ];
            return redirect()->to(base_url('/home'));
        } else {
            if (!empty($selectedevent)) {
                $user = $userModel->getUserById($namaPengguna);
                $data = [
                    'compe' => $selectedevent,
                    'nama' => $user['nama'],
                    'id' => $namaPengguna,
                    'title' => 'event'
                ];
                echo view("allevent", $data);
            } else {
                $user = $userModel->getUserById($namaPengguna);
                $data = [
                    'nama' => $user['nama'],
                    'id' => $namaPengguna,
                    'compe' => "",
                ];
                echo view("allevent", $data);
            }
        }
    }
}
