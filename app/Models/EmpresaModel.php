<?php

namespace App\Models;

use CodeIgniter\Model;

class EmpresaModel extends Model{
    protected $table = 'tb_cad_empresa';
    protected $primaryKey = 'Cod_Empresa';
    protected $allowedFields = ['Nome_Pessoal','CPF_Pessoal','Dt_Pessoal','Sexo_Pessoal','Email_Pessoal','CNPJ_Empresa', 'Email_Empresa', 'Tel_Empresa', 'Nm_Fantasia_Empresa', 'Nm_Razao_Social', 'Estado_Empresa', 'Cidade_Empresa', 'Endereco_Empresa', 'Numero_Empresa', 'Complemento_Empresa', 'Cod_Segm'];
    protected $returnType = 'object';
}