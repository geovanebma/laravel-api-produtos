<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;

class Empresa extends Model
{
    protected $table = 'empresas';

    protected $fillable = [
        'nome_empresa',
        'desc_empresa'
    ];

    public function produtos()
    {
        return $this->hasMany(Produto::class, 'cod_empresa');
    }
}
