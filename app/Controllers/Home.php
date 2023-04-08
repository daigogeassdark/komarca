<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('layouts/header_footer/header');
        echo view('body_principal');
        echo view('layouts/header_footer/footer');
    }
}
