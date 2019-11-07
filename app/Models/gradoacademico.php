<?php namespace App\Models;

use CodeIgniter\Model;

class gradoacademico extends Model
{
        protected $table      = 'gradoacademico';
        protected $primaryKey = 'id';
        protected $returnType = 'array';
        protected $allowedFields = ['Grado'];
        protected $useTimestamps = false;
}