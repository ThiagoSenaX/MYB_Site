<?php

namespace App\Models;

use CodeIgniter\Model;

class FornecedorModel extends Model{
    protected $table = 'tb_fornecedor_prod';
    protected $primaryKey = 'Cod_Forn';
    protected $allowedFields = ['Nm_Fantasia_Forn','Tel1_Forn','Tel2_Forn','Email_Forn'];
    protected $returnType = 'object';
}