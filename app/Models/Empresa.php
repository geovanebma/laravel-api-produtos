<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas'; // Nome da tabela no banco de dados

    protected $fillable = [
        'nome_empresa',
        'desc_empresa'
    ];

    // Se houver relações, adicione-as aqui
    public function produtos()
    {
        return $this->hasMany(Produto::class, 'cod_empresa');
    }
}
