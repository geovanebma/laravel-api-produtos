<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    public function empresa()
    {
        return $this->belongsTo('App\Empresa', 'cod_empresa');
    }
}
