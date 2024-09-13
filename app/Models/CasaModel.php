<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CasaModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'imobiliaria',
        'endereco',
        'preco',
        'tipo'
    ];

    protected $table = 'casa';
    public $incrementing = true;
    public $timestamps = false;
}
