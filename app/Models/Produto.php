<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos'; // Nome da tabela no banco de dados

    protected $primaryKey = 'cod_produto'; // Nome da chave prim�ria na tabela

    protected $fillable = [
        'cod_empresa', 'nome', 'descricao', 'valor'
    ]; // Campos que podem ser atribu�dos em massa

    // Relacionamento com a tabela de empresas
    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'cod_empresa');
    }
}
