<?php

namespace Apptotem;

use Illuminate\Database\Eloquent\Model;
use Apptotem\Categoria;
class Categoria extends Model
{
    //$categorias = Apptotem\CAtegoria::all();
    protected $table = 'categorias';
    //protected $fillable = ['titulo','activo'];

    
    public function atractivos()
    {
        return $this->hasMany('Apptotem\Atractivo');
    }
    
    // public function atractivos()
	// {
	// 	return $this->hasMany(Atractivo::class);
	// }

}
