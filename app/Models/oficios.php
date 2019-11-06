<?php namespace App\Models;

use CodeIgniter\Model;

class oficios extends Model
{
        protected $table      = 'oficios';
        protected $primaryKey = 'id';
        protected $returnType = 'array';
        protected $allowedFields = ['Nombre'];
        protected $useTimestamps = false;
}