<?php

namespace App\Controllers\Admin;
use App\Models\AdminAll;

use App\Controllers\BaseController;

class Customer extends BaseController
{
    public function index()
    {
        $customerModel = new AdminAll();
        $data['customer']=$customerModel->findAll();

        return view('admin/customer/index', $data);
    }
}