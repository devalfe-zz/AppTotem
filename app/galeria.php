<?php

namespace Apptotem;

use Illuminate\Database\Eloquent\Model;

class galeria extends Model
{
    //
    protected $table = 'galerias';
    protected $fillable = ['titulo','foto_url','activo','atractivo_id'];

     public function atractiv(){
        return $this->belongsTo('Apptotem\atractivo');
    }
}
