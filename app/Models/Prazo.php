<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Prazo extends Model
{
    /** @use HasFactory<\Database\Factories\PrazoFactory> */
    use HasFactory;

    protected $fillable = [
        'processo_numero',
        'descricao',
        'data_limite',
        'responsavel',
        'status',
    ];

    protected $casts = [
        'data_limite' => 'date',
    ];
}
