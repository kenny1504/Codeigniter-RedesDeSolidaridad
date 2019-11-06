<?php namespace App\Models;

use CodeIgniter\Model;

class parentescos extends Model
{
        protected $table      = 'parentescos';
        protected $primaryKey = 'id';
        protected $returnType = 'array';
        protected $allowedFields = ['parentesco'];
        protected $useTimestamps = false;
}