<?php namespace App\Models;

use CodeIgniter\Model;

class secciones extends Model
{
        protected $table      = 'secciones';
        protected $primaryKey = 'id';
        protected $returnType = 'array';
        protected $allowedFields = ['Codigo'];
        protected $useTimestamps = false;
}