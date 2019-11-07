<?php namespace App\Models;

use CodeIgniter\Model;

class turnos extends Model
{
        protected $table      = 'turnos';
        protected $primaryKey = 'id';
        protected $returnType = 'array';
        protected $allowedFields = ['Nombre'];
        protected $useTimestamps = false;
}