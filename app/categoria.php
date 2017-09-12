<?php

namespace Apptotem;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    //
    protected $table = 'categorias';
    protected $fillable = ['name','activo'];

    public function atractivos(){
        return $this->hasMany('Apptotem\atractivo');
    }
}
