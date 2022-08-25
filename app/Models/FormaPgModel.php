<?php

namespace App\Models;

use CodeIgniter\Model;

class FormaPgModel extends Model{
    protected $table = 'tb_forma_pagamento';
    protected $primaryKey = 'Cod_FormaPg';
    protected $allowedFields = ['Nome_FormaPg'];
    protected $returnType = 'object';
}