<?php

namespace App\Controllers;

use Config\App;

Class ProdutoController extends BaseController{

    public function index(){
        echo view('header');
		echo view('produtos');
		echo view('footer');
    }

    public function Produtos(){
        $ProdutoModel = new \App\Models\ProdutoModel();
        $CategoriaModelo = new \App\Models\CategoriaModel();
        $FornecedorModelo = new \App\Models\FornecedorModel();
        $ContatoModel = new \App\Models\ContatoModel();

        $registros = $ProdutoModel->find();
        $registros2 = $CategoriaModelo->find();
        $registros3 = $FornecedorModelo->find();
        $registros4 = $ContatoModel->find();             

        $data['produtos'] = $registros;
        $data['categorias'] = $registros2;
        $data['fornecedores'] = $registros3;
        $data['mensagens'] = $registros4;
    
        $request = service('request');

        $codProd = $request->getPost('codProd');
        $CadProd = $request->getPost('cadProd');
        $CadCate = $request->getPost('cadCategoria');
        $CadForn = $request->getPost('cadFornecedor');
        
        
        /*if($codfornecedor){
            $this->deletarFornecedor($codfornecedor);
            return redirect()->to(base_url('FornecedorController/todosFornecedores'));
        }*/
        $codProdAlterar = $request->getPost('codProdAlterar');


        if($codProdAlterar) {
			$this->alterarProduto($codProdAlterar);
            return redirect()->to(base_url('./ProdutoController/Produtos'));

		}
    
        if($codProd){
            return $this->listaCodProduto();
        }
        if($CadProd){
            $this->inserirProduto();
            return redirect()->to(base_url('./ProdutoController/Produtos'));
        }
        if($CadCate){
            $this->inserirCategoria();
            return redirect()->to(base_url('./ProdutoController/Produtos'));
        }
        if($CadForn){
            $this->inserirFornecedor();
            return redirect()->to(base_url('./ProdutoController/Produtos'));
        }
    
        echo view('header', $data);
        echo view('produtos', $data);
        echo view('footer');
    }

    public function inserirProduto(){
        $data['msg'] = '';
        $request = service('request');

        if($request->getMethod() === 'post'){
            $ProdutoModelo = new \App\Models\ProdutoModel();

            $uploaddir = 'imgprod/';
            $imgprod = $request->getPost("imgprod");
            $uploadfile = $uploaddir.basename($_FILES["imgprod"]['name']);
            move_uploaded_file($_FILES['imgprod']['tmp_name'], $uploadfile);
            $ProdutoModelo->set('Nm_Prod', $request->getPost('nomeprod'));
            $ProdutoModelo->set('Desc_Prod', $request->getPost('descprod'));
            $ProdutoModelo->set('Preco_Prod', $request->getPost('precoprod'));
            $ProdutoModelo->set('Img_Prod',$uploadfile );
            $ProdutoModelo->set('Qtd_Estoque_Prod', $request->getPost('qtdprod'));
            $ProdutoModelo->set('Ativo', $request->getPost('ativoprod'));
            $ProdutoModelo->set('Cod_Forn', $request->getPost('codforn'));
            $ProdutoModelo->set('Cod_Categoria', $request->getPost('codcategoria'));

            if($ProdutoModelo->insert()){
                $data['msg'] = 'Informações cadastradas com sucesso!';
            }
            else{
                $data['msg'] = 'Informações não cadastradas.';
            }
        }
        
    }

    public function listaCodProduto(){
        $request = service('request');
        $codproduto = $request->getPost('codProd');
        $ProdutoModel = new \App\Models\ProdutoModel();
        $registros = $ProdutoModel->find($codproduto);

        $ContatoModel = new \App\Models\ContatoModel();
        $CategoriaModelo = new \App\Models\CategoriaModel();
        $FornecedorModelo = new \App\Models\FornecedorModel();

        $registros2 = $CategoriaModelo->find();
        $registros3 = $FornecedorModelo->find();
        $registros4 = $ContatoModel->find();    
        $registros5 = $FornecedorModelo->find($registros->Cod_Forn);
        $registros6 = $CategoriaModelo->find($registros->Cod_Categoria);

        $data['produto'] = $registros;
        $data['categorias'] = $registros2;
        $data['fornecedores'] = $registros3;
        $data['mensagens'] = $registros4;
        $data['fornecedorSelec'] = $registros5;
        $data['categoriaSelec'] = $registros6;

		$codProdAlterar = $request->getPost('codProdAlterar');


        if($codProdAlterar) {
			$this->alterarProduto($codProdAlterar);

		}

        echo view('header', $data);
        echo view('alterarProd', $data);
        echo view('footer');
    }

    public function alterarProduto($codProdAlterar){

        $request = service('request');
        $codProdAlterar = $request->getPost('codProdAlterar'); 
        $nomeProd = $request->getPost('nomeprodalt'); 
        $descProd = $request->getPost('descprodalt');
        $precoProd = $request->getPost('precoprodalt');
        $imgProd = $request->getPost('imgprodalt'); 
        $qtdProd = $request->getPost('qtdprodalt');
        $cateProd = $request->getPost('cateprodalt');
        $fornProd = $request->getPost('fornprodalt');

        $ProdutoModel = new \App\Models\ProdutoModel();
        $registros = $ProdutoModel->find($codProdAlterar);
        
        if($codProdAlterar){
            $uploaddir = 'imgprod/';
            $imgprod = $request->getPost("imgprod");
            $uploadfile = $uploaddir.basename($_FILES["imgprod"]['name']);
            move_uploaded_file($_FILES['imgprod']['tmp_name'], $uploadfile);

            $registros->Nm_Prod = $nomeProd;
            $registros->Desc_Prod = $descProd;
            $registros->Preco_Prod = $precoProd;
            $registros->Img_Prod = $uploadfile;
            $registros->Qtd_Estoque_Prod = $qtdProd;
            $registros->Img_Prod = $uploadfile;
            $registros->Qtd_Estoque_Prod = $qtdProd; 
            $registros->Cod_Categoria = $cateProd;
            $registros->Cod_Forn = $fornProd;

            $ProdutoModel->update($codProdAlterar,$registros);
            
            return redirect()->to(base_url('./ProdutoController/Produtos/'));            
        }

        $data['produtos'] = $registros;

    }

    public function inserirCategoria(){
        $data['msg'] = '';
        $request = service('request');

        if($request->getMethod() === 'post'){
            $CategoriaModelo = new \App\Models\CategoriaModel();

            $CategoriaModelo->set('Nm_Categoria', $request->getPost('nomecategoria'));
            $CategoriaModelo->set('Desc_Categoria', $request->getPost('desccategoria'));
            $CategoriaModelo->set('Ativo', $request->getPost('ativocategoria'));

            if($CategoriaModelo->insert()){
                $data['msg'] = 'Informações cadastradas com sucesso!';
            }
            else{
                $data['msg'] = 'Informações não cadastradas.';
            }
        }
        
    }

    public function inserirFornecedor(){
        $data['msg'] = '';
        $request = service('request');

        if($request->getMethod() === 'post'){
            $FornecedorModelo = new \App\Models\FornecedorModel();

            $FornecedorModelo->set('Nm_Fantasia_Forn', $request->getPost('nomeforn'));
            $FornecedorModelo->set('Tel1_Forn', $request->getPost('tel1forn'));
            $FornecedorModelo->set('Tel2_Forn', $request->getPost('tel2forn'));
            $FornecedorModelo->set('Email_Forn', $request->getPost('emailforn'));

            if($FornecedorModelo->insert()){
                $data['msg'] = 'Informações cadastradas com sucesso!';
            }
            else{
                $data['msg'] = 'Informações não cadastradas.';
            }
        }
    }
}
