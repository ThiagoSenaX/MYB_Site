<?php

namespace App\Models;

use CodeIgniter\Model;

class SegmentoModel extends Model{
    protected $table = 'segmento_empresa';
    protected $primaryKey = 'Cod_Segmento';
    protected $allowedFields = ['Nm_Segmento','Desc_Segmento','Ativo'];
    protected $returnType = 'object';
}