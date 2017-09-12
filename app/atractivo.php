<?php

namespace Apptotem;

use Illuminate\Database\Eloquent\Model;

class atractivo extends Model
{
    //
    protected $table = 'atractivos';
    protected $fillable = ['titulo', 'descripcion','detalle','direccion','ubicacion','longitud','latitud','horarios','categoria_id','activo'];

    public function categorias()
    {
        return $this->belongsTo('Apptotem\categoria');
    }
    public function galerias(){ 
        return $this->hasMany('Apptotem\galeria');
    }
}
