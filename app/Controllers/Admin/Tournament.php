<?php

namespace App\Controllers\Admin;
use App\Models\MyEventMod;

use App\Controllers\BaseController;

class Tournament extends BaseController
{
    public function index()
    {
        $customerModel = new MyEventMod();
        $turney['tournament']=$customerModel->findAll();

        return view('admin/turnamen/index', $turney);
    }
}