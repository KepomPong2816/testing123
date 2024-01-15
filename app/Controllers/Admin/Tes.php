<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Tes extends BaseController
{
    public function index()
    {
       return view("test/braket");
    }
}