<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Pasto extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'pastos';

    protected $fillable = [
        'nombre_cientifico',
        'nombre_comun',
        'edades',
    ];
}
