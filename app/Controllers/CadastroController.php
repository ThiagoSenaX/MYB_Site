<?php

namespace App\Controllers;

use Config\App;

class CadastroController extends BaseController
{

    public function index()
    {
        echo view('cadastro');
    }

    public function Cadastro()
    {
        $SegmentoModel = new \App\Models\SegmentoModel();

        $registros = $SegmentoModel->find();

        $data['msg'] = '';
        $data['segmentos'] = $registros;


        $request = service('request');

        $cadEmpresa = $request->getPost('cadEmpresa');


        if ($cadEmpresa) 
        {
            if ($request->getMethod() === 'post') 
            {
                $EmpresaModel = new \App\Models\EmpresaModel();

                $EmpresaModel->set('Nome_Pessoal', $request->getPost('Nome_Pessoal'));
                $EmpresaModel->set('CPF_Pessoal', $request->getPost('CPF_Pessoal'));
                $EmpresaModel->set('Dt_Pessoal', $request->getPost('Dt_Pessoal'));
                $EmpresaModel->set('Sexo_Pessoal', $request->getPost('Sexo_Pessoal'));
                $EmpresaModel->set('Email_Pessoal', $request->getPost('Email_Pessoal'));
                $EmpresaModel->set('CNPJ_Empresa', $request->getPost('CNPJ_Empresa'));
                $EmpresaModel->set('Email_Empresa', $request->getPost('Email_Empresa'));
                $EmpresaModel->set('Tel_Empresa', $request->getPost('Tel_Empresa'));
                $EmpresaModel->set('Nm_Fantasia_Empresa', $request->getPost('Nm_Fantasia_Empresa'));
                $EmpresaModel->set('Nm_Razao_Social', $request->getPost('Nm_Razao_Social'));
                $EmpresaModel->set('Estado_Empresa', $request->getPost('Estado_Empresa'));
                $EmpresaModel->set('Cidade_Empresa', $request->getPost('Cidade_Empresa'));
                $EmpresaModel->set('Endereco_Empresa', $request->getPost('Endereco_Empresa'));
                $EmpresaModel->set('Numero_Empresa', $request->getPost('Numero_Empresa'));
                $EmpresaModel->set('Complemento_Empresa', $request->getPost('Complemento_Empresa'));
                $EmpresaModel->set('Cod_Segm', $request->getPost('Cod_Segm'));

                if ($EmpresaModel->insert()) {
                    $data['msg'] = 'OK';
                } else {
                    $data['msg'] = 'ERRO';
                }
            }
        }
        echo view('cadastro', $data);

        /*public function inserirEmpresa(){
        $data['msg'] = '';
        $request = service('request');

        if($request->getMethod() === 'post'){
            $EmpresaModel = new \App\Models\EmpresaModel();

            $EmpresaModel->set('Nome_Pessoal', $request->getPost('Nome_Pessoal'));
            $EmpresaModel->set('CPF_Pessoal', $request->getPost('CPF_Pessoal'));
            $EmpresaModel->set('Dt_Pessoal', $request->getPost('Dt_Pessoal'));
            $EmpresaModel->set('Sexo_Pessoal', $request->getPost('Sexo_Pessoal'));
            $EmpresaModel->set('Email_Pessoal', $request->getPost('Email_Pessoal'));
            $EmpresaModel->set('CNPJ_Empresa', $request->getPost('CNPJ_Empresa'));
            $EmpresaModel->set('Email_Empresa', $request->getPost('Email_Empresa'));
            $EmpresaModel->set('Tel_Empresa', $request->getPost('Tel_Empresa'));
            $EmpresaModel->set('Nm_Fantasia_Empresa', $request->getPost('Nm_Fantasia_Empresa'));
            $EmpresaModel->set('Nm_Razao_Social', $request->getPost('Nm_Razao_Social'));
            $EmpresaModel->set('Estado_Empresa', $request->getPost('Estado_Empresa'));
            $EmpresaModel->set('Cidade_Empresa', $request->getPost('Cidade_Empresa'));
            $EmpresaModel->set('Endereco_Empresa', $request->getPost('Endereco_Empresa'));
            $EmpresaModel->set('Numero_Empresa', $request->getPost('Numero_Empresa'));
            $EmpresaModel->set('Complemento_Empresa', $request->getPost('Complemento_Empresa'));
            $EmpresaModel->set('Cod_Segm', $request->getPost('Cod_Segm'));

            if($EmpresaModel->insert()){
                $data['msg'] = 'Informações cadastradas com sucesso!';
            }
            else{
                $data['msg'] = 'Informações não cadastradas.';
            }
        }
        
    }*/
    }
}
