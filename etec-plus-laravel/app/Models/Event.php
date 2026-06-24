<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsDate;

class Event extends Model
{
    /**
     * Os atributos que podem ser atribuídos em massa
     * 
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'date',
        'image_url',
    ];

    /**
     * Os atributos que devem ser convertidos para tipos nativos
     * 
     * @var array<string, string>
     */
    protected $casts = [
        'date' => 'date',
    ];
}
