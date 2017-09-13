<?php

namespace Apptotem;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;


class atractivo extends Model// implements SluggableInterface
{
    //
    // use SluggableTrait;

	// protected $sluggable = [
	// 	'build_from' => 'titulo',
	// 	'save_to' => 'slug'
	// ];
    protected $table = 'atractivos';
    protected $fillable = ['titulo', 'descripcion','detalle','direccion','ubicacion','longitud','latitud','horarios','activo','categoria_id'];

    public function categorias()
    {
        return $this->belongsTo('Apptotem\categoria');
    }
    public function galerias(){ 
        return $this->hasMany('Apptotem\galeria');
    }
    public function scopeSearch($query, $title)
	{
		return $query->where('titulo', 'LIKE', "%$title%");
	}
}
