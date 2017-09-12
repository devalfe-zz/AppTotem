<?php

namespace Apptotem;

use Illuminate\Database\Eloquent\Model;

class galeria extends Model
{
    //
    protected $table = 'galerias';
    protected $fillable = ['titulo','foto_url','atractivo_id','activo'];

     public function atractivos(){
        return $this->belongsTo('Apptotem\atractivo');
    }
}
