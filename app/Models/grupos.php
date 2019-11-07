<?php namespace App\Models;

use CodeIgniter\Model;

class grupos extends Model
{
        protected $table      = 'grupos';
        protected $primaryKey = 'id';
        protected $returnType = 'array';
        protected $allowedFields = ['Grupo'];
        protected $useTimestamps = false;
}