<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Peserta;

class Join extends BaseController
{
    public function join()
    {
        // Load the database library
        $db = \Config\Database::connect();

        $id_event = $this->request->getPost("idevent");
        $id_user = $this->request->getPost("iduser");

        // Check if the user has already joined the event
        $existingRecord = $db->table('peserta')
            ->where('id_event', $id_event)
            ->where('id_user', $id_user)
            ->get()
            ->getRow();

        if ($existingRecord) {
            echo '<script>
                alert("Anda sudah terdaftar dalam acara ini!");
                window.location="' . base_url('/home') . '"
            </script>';
            return;
        }

        // Check if the maximum number of participants (8) has been reached
        $participantCount = $db->table('peserta')
            ->where('id_event', $id_event)
            ->countAllResults();

        if ($participantCount >= 8) {
            echo '<script>
                alert("Maaf, acara ini sudah mencapai batas peserta maksimal.");
                window.location="' . base_url('/home') . '"
            </script>';
            return;
        }

        // If everything is valid, save the user data
        $model = new Peserta();
        $data = array(
            'id_event' => $id_event,
            'id_user' => $id_user,
        );
        $model->saveuser($data);

        echo '<script>
            alert("Selamat! Berhasil Menambah Data ");
            window.location="' . base_url('/home') . '"
        </script>';
    }
}
