<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Note extends Model
{
    /**
     * Os atributos que podem ser atribuídos em massa
     * 
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'course_id',
        'title',
        'content',
    ];

    /**
     * Relacionamento: Uma nota pertence a um usuário
     * 
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relacionamento: Uma nota pertence a um curso (opcional)
     * 
     * @return BelongsTo
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
