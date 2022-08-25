<?php

namespace App\Controllers;

use Config\App;

Class ContatoController extends BaseController{

    public function Contato(){
        $data['msg'] = '';

        $request = service('request');

        $cadMensagem = $request->getPost('cadMensagem');

        if($cadMensagem){

            //execução da função cadastrar
            if($request->getMethod() === 'post'){
                $ContatoModel = new \App\Models\ContatoModel();
    
                $ContatoModel->set('nome', $request->getPost('nome'));
                $ContatoModel->set('email', $request->getPost('email'));
                $ContatoModel->set('msg', $request->getPost('msg'));
    
    
                if($ContatoModel->insert()){
                    $data['msg'] = '  Mensagem enviada com sucesso!';
                }
                else{
                    $data['msg'] = '  Ops... Algo deu errado :/';
                }
            }
        }
        
        echo view('contato',$data);
    }
}

