<?php

namespace App\Controllers\Admin;

use App\Models\AdminAll; 
use App\Models\MyEventMod; 

use App\Controllers\BaseController;

class DashboardController extends BaseController
{ 
    public function index()
    {
        // count customer
        $customerModel = new AdminAll();
        $customer = $customerModel->table('user');
        $countcustomer = $customer->where('id_user >', '0')->countAllResults();
        
        // count event
        $eventModel = new MyEventMod();
        $event = $eventModel->table('event');
        $countevent = $event->where('id_event >', '0')->countAllResults();

        // value count dijadikan array agar value bisa dikirim ke view
        $data = [
            'countcustomer' => $countcustomer,
            'countevent' => $countevent,
        ];

        return view("admin/dashboard", $data);
    }

    public function totaluser()
    {
        // Total_Customer 
    }
    public function totalevent()
    {
        // Total_Event
    }
    public function totaltransaksi()
    {
        // Total_Transaksi 
    }
    public function totalpendapatan()
    {
        // Total_Pendapatan, menggunakan API dari Midtrans (on progress ROJI) 
    }
}
