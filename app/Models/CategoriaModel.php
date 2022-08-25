<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriaModel extends Model{
    protected $table = 'tb_categoria';
    protected $primaryKey = 'Cod_Categoria';
    protected $allowedFields = ['Nm_Categoria','Desc_Categoria','Ativo'];
    protected $returnType = 'object';
}