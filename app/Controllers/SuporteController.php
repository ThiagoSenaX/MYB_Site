<?php

namespace App\Controllers;

use Config\App;

Class SuporteController extends BaseController{

    public function Suporte(){
        $ContatoModel = new \App\Models\ContatoModel();

        $registros = $ContatoModel->find();

        $data['mensagens'] = $registros;

        echo view('header', $data);
		echo view('suporte');
		echo view('footer');
    }
}