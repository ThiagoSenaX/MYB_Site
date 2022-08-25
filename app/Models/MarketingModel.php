<?php

namespace App\Models;

use CodeIgniter\Model;

class MarketingModel extends Model{
    protected $table = 'tb_cupom';
    protected $primaryKey = 'Cod_Cupom';
    protected $allowedFields = ['Codigo_Cupom','Desc_Cupom','Desconto_Cupom','Ativo','Uso_Cupom'];
    protected $returnType = 'object';
}