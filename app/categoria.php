<?php

namespace Apptotem;

use Illuminate\Database\Eloquent\Model;
use Apptotem\Categoria;
class Categoria extends Model
{
    protected $table = 'categorias';
    protected $primaryKey = 'id';    
    protected $fillable = ['id','titulo','activo'];   
    
    public function atractivos()
	{
		return $this->hasMany('Apptotem\Atractivo');
    }
        
    public function fotos()
	{
		return $this->hasManyThrough('Apptotem\Galeria','Apptotem\Atractivo','categoria_id','atractivo_id', 'id','id');
	}

    public function foto_cat(){
        return $this->morphMany('Apptotem\Galeria','fotos_cat');
    }
}
