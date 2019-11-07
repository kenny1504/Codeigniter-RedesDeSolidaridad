<?php namespace App\Models;

use CodeIgniter\Model;

class grados extends Model
{
        protected $table      = 'grados';
        protected $primaryKey = 'id';
        protected $returnType = 'array';
        protected $allowedFields = ['Grado'];
        protected $useTimestamps = false;
}