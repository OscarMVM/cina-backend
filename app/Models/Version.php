<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Version extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'versions';

    protected $fillable = [
        'recurso',
        'fecha_actualizacion'
    ];
}
