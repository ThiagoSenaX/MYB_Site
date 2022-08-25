<?php

namespace App\Controllers;

use Config\App;

Class PedidoController extends BaseController{

    public function index(){
        echo view('header');
		echo view('pedidos');
		echo view('footer');
    }

    public function Pedidos(){
        $ContatoModel = new \App\Models\ContatoModel();
        $ProdutoModel = new \App\Models\ProdutoModel();
        $FormaPgModel = new \App\Models\FormaPgModel();

        $registros3 = $FormaPgModel->find();
        $registros2 = $ProdutoModel->find();
        $registros = $ContatoModel->find();

        $data['mensagens'] = $registros;
        $data['produtos'] = $registros2;
        $data['formaspg'] = $registros3;

        echo view('header',$data);
		echo view('pedidos',$data);
		echo view('footer');
    }


}
