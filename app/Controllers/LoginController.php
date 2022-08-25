<?php

namespace App\Controllers;

use Config\App;

Class LoginController extends BaseController{

    public function Login(){
        echo view('login');

    }
}
