<?php namespace App\Models;

use CodeIgniter\Model;

class asignaturas extends Model
{
        protected $table      = 'asignaturas';
        protected $primaryKey = 'id';
        protected $returnType = 'array';
        protected $allowedFields = ['Nombre'];
        protected $useTimestamps = false;

        protected $validationRules = [
                'Nombre'        => 'required|is_unique[asignaturas.Nombre]'
        ];

        protected $validationMessages = [ // mensages personalizados de validacion
                'Nombre'        => [
                        'is_unique' => 'La Materia existe.'
                ]
        ];

}