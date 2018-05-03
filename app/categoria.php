<?php

namespace Apptotem;

use Illuminate\Database\Eloquent\Model;
use Apptotem\Categoria;
class Categoria extends Model
{
    //$categorias = Apptotem\CAtegoria::all();
    protected $table = 'categorias';
    protected $primaryKey = 'id';    
    protected $fillable = ['id','titulo','activo','categoria_id'];

    
    // public function cat_atractivos()
    // {
    //     return $this->hasMany('Apptotem\Atractivo');
    // }
    
    public function cat_atractivos()
	{
		return $this->hasMany(Atractivo::class);
	}

}
