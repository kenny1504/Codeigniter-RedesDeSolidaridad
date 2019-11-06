<?php namespace App\Models;

use CodeIgniter\Model;

class usuarios extends Model
{
        protected $table      = 'usuarios';
        protected $primaryKey = 'id';
        protected $returnType = 'array';
        protected $allowedFields = ['Cedula,ClaveDeUsuario,Nombre,NombreDeUsuario'];
        protected $useTimestamps = false;
}