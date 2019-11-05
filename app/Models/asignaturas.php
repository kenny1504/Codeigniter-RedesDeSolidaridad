<?php namespace App\Models;

use CodeIgniter\Model;

class asignaturas extends Model
{
        protected $table      = 'asignaturas';
        protected $primaryKey = 'id';
        protected $returnType = 'array';
        protected $allowedFields = ['Nombre'];
        protected $useTimestamps = false;
}