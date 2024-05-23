<?php

namespace App;
namespace App\Models;
namespace App\Models\Produto;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas'; // Nome da tabela no banco de dados

    protected $primaryKey = 'cod_empresa'; // Nome da chave primária na tabela

    protected $fillable = [
        'nome_empresa', 'desc_empresa'
    ]; // Campos que podem ser atribuídos em massa

    // Relacionamento com a tabela de produtos
    public function produtos()
    {
        return $this->hasMany(Produto::class, 'cod_empresa');
    }
}
