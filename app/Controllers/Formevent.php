<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Eventm;

class Formevent extends BaseController
{
    public function form()
    {
        $imageFile = $this->request->getFile('upload');

        // Check if the file is valid and move it to the public directory
        if ($imageFile->isValid() && !$imageFile->hasMoved()) {
            // Generate a unique name for the image
            $imageName = $imageFile->getRandomName();

            // Move the image to the public directory
            $imageFile->move(ROOTPATH . 'public\assets\image', $imageName);

            // You can perform any additional actions or return a response here
        } else {
            // Image upload failed
            // You can handle the error or return an appropriate response
        }

        $model = new Eventm;
        $data = array(
            'id_user' => $this->request->getPost("l"),
            'title' => $this->request->getPost("title"),
            'date_column' => $this->request->getPost("date"),
            'time' => $this->request->getPost("time"),
            'organizer' => $this->request->getPost("organize"),
            'type_sport' => $this->request->getPost("type"),
            'participant' => $this->request->getPost("participan"),
            'location' => $this->request->getPost("location"),
            'upload' => $imageName,
            'price' => $this->request->getPost("price")
        );
        $model->saveuser($data);
        echo '<script>
                alert("Selamat! Berhasil Membuat Competition ");
                window.location="' . base_url('/event') . '"
            </script>';
    }
}
