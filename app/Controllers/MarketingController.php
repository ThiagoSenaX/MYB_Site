<?php

namespace App\Controllers;

use Config\App;

Class MarketingController extends BaseController{

    public function index(){
        echo view('header');
		echo view('marketing');
		echo view('footer');
    }

    public function Marketing(){
        $ContatoModel = new \App\Models\ContatoModel();

        $registros2 = $ContatoModel->find();

        $data['mensagens'] = $registros2;

        $MarketingModelo = new \App\Models\MarketingModel();

        $registros = $MarketingModelo->find();

        $data['cupons'] = $registros;

        $request = service('request');

        $codCupomAlterar = $request->getPost('codCupomAlterar');
        $CadCupom = $request->getPost('cadCupom');
        $codCupom = $request->getPost('codCupom');

        if($codCupomAlterar) {
			$this->alterarCupom($codCupomAlterar);
            return redirect()->to(base_url('./MarketingController/Marketing'));
		}

        if($codCupom){
			return $this->listaCodCupom();
		}

        if($CadCupom){
            $this->inserirCupom();
            return redirect()->to(base_url('MarketingController/Marketing'));
        }

        echo view('header', $data);
		echo view('marketing',$data);
		echo view('footer');
    }

    public function inserirCupom(){
        $data['msg'] = '';
        $request = service('request');

        if($request->getMethod() === 'post'){
            $MarketingModelo = new \App\Models\MarketingModel();

            $MarketingModelo->set('Codigo_Cupom', $request->getPost('codigocupom'));
            $MarketingModelo->set('Desc_Cupom', $request->getPost('descrcupom'));
            $MarketingModelo->set('Desconto_Cupom', $request->getPost('descontocupom'));
            $MarketingModelo->set('Ativo', $request->getPost('ativocupom'));
            $MarketingModelo->set('Uso_Cupom', $request->getPost('usocupom'));

            if($MarketingModelo->insert()){
                $data['msg'] = 'Informações cadastradas com sucesso!';
            }
            else{
                $data['msg'] = 'Informações não cadastradas.';
            }
        }
    }

    public function listaCodCupom(){
        $request = service('request');
        $codcupom = $request->getPost('codCupom');
        $MarketingModel = new \App\Models\MarketingModel();
        $registros = $MarketingModel->find($codcupom);

        $ContatoModel = new \App\Models\ContatoModel();

        $registros2 = $ContatoModel->find();    

        $data['cupom'] = $registros;
        $data['mensagens'] = $registros2;

        echo view('header', $data);
        echo view('alterarCupom', $data);
        echo view('footer');
    }

    public function alterarCupom($codCupomAlterar){
        $request = service('request');
        $codCupomAlterar = $request->getPost('codCupomAlterar');

        $codigoCupom = $request->getPost('codigoCupom');
        $descrCupom = $request->getPost('descrCupom');
        $descontoCupom = $request->getPost('descontoCupom');
        $ativoCupom = $request->getPost('ativoCupom'); 


        $MarketingModel = new \App\Models\MarketingModel();
        $registros = $MarketingModel->find($codCupomAlterar);
        
        if($codCupomAlterar){
            $registros->Codigo_Cupom = $codigoCupom;
            $registros->Desc_Cupom = $descrCupom;
            $registros->Desconto_Cupom = $descontoCupom;
            $registros->Ativo = $ativoCupom;
            
            $MarketingModel->update($codCupomAlterar,$registros);        
        }

    }

}
