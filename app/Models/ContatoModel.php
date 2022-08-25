<?php

namespace App\Models;

use CodeIgniter\Model;

class ContatoModel extends Model{
    protected $table = 'tb_mensagem';
    protected $primaryKey = 'cod_msg';
    protected $allowedFields = ['nome','email','msg'];
    protected $returnType = 'object';
}