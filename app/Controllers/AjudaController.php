<?php

namespace App\Controllers;

use Config\App;

Class AjudaController extends BaseController{

    public function Ajuda(){
        $ContatoModel = new \App\Models\ContatoModel();

        $registros = $ContatoModel->find();

        $data['mensagens'] = $registros;

        echo view('header', $data);
		echo view('ajuda');
		echo view('footer');
    }
}