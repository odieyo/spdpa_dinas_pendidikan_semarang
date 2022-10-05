<?php

namespace App\Controllers;

use App\Models\M_User;

class Admin1 extends BaseController
{
    protected $M_User;

    public function __construct()
    {
        $this->M_User = new M_user();
    }

    public function index()
    {
        $data = [
            'title' => 'Halaman Admin',
            'nama_user' => 'Admin',
            'jumlah_user' => $this->M_User->countUser
        ];

        return view("admin/dashboard_admin", $data);
    }
}
