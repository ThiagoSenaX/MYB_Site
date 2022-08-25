<?php

namespace App\Controllers;

use Config\App;

Class SobreController extends BaseController{

    public function Sobre(){
        $ContatoModel = new \App\Models\ContatoModel();

        $registros = $ContatoModel->find();

        $data['mensagens'] = $registros;

        echo view('header', $data);
		echo view('sobre');
		echo view('footer');
    }
}