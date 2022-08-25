<?php

namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model{
    protected $table = 'tb_cliente';
    protected $primaryKey = 'Cod_Cli';
    protected $allowedFields = ['Nm_cli','Email_cli','Data_Nasc','Tel1_cli','Tel2_cli','Ativo', 'Senha_cli', 'Numero_cli', 'Complemento_cli', 'Referencia_cli', 'Cod_End'];
    protected $returnType = 'object';
}

