<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutoModel extends Model{
    protected $table = 'tb_produto';
    protected $primaryKey = 'Cod_Prod';
    protected $allowedFields = ['Nm_Prod','Desc_Prod','Preco_Prod','Img_Prod','Ativo','Qtd_Estoque_Prod', 'Cod_Forn', 'Cod_Categoria'];
    protected $returnType = 'object';
}

