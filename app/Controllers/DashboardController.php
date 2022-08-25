<?php

namespace App\Controllers;

use Config\App;

Class DashboardController extends BaseController{

    public function index(){
        echo view('header');
		echo view('dashboard');
		echo view('footer');
    }

    public function Dashboard(){
        $ContatoModel = new \App\Models\ContatoModel();

        $registros = $ContatoModel->find();

        $data['mensagens'] = $registros;

        echo view('header',$data);
		echo view('dashboard');
		echo view('footer');
    }
}
