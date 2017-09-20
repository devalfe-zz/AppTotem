<?php

namespace Apptotem;

use Illuminate\Database\Eloquent\Model;

class Atractivo extends Model
{
    //
    protected $table = 'atractivos';
    //protected $fillable = ['titulo','descripcion','detalle','direccion','ubicacion','longitud','latitud','horarios','foto_url','activo','categoria_id'];

    public function categorias()
    {
        return $this->belongsTo('Apptotem\Categoria','categoria_id','id');
    }
    public function fotos()
    {
        return $this->hasMany('Apptotem\Galeria');
    }

    public function scopeSearchCategoria($query, $id)
	{
		return $query->where('categoria_id', '=', $id);
    }
    
    public function scopeSearchUbicacion($query, $ubicacion)
	{
		return $query->where('ubicacion', '=', $ubicacion);
	}
}
