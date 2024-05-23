<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Empresa;

class Produto extends Model
{
    protected $table = 'produtos';

    protected $fillable = [
        'cod_empresa',
        'nome',
        'descricao',
        'valor'
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'id');
    }
}
