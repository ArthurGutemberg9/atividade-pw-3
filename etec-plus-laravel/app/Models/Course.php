<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    /**
     * Os atributos que podem ser atribuídos em massa
     * 
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'image_url',
    ];

    /**
     * Relacionamento: Um curso tem muitas notas
     * 
     * @return HasMany
     */
    public function notes(): HasMany
    {
        return $this->hasMany(Note::class);
    }
}
