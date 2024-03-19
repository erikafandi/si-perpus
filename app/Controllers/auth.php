<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class auth extends BaseController
{
    public function index()
    {
        return view('pages/login.php');
    }
}
