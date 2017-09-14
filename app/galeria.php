<?php

namespace Apptotem;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    //
    protected $table = 'galerias';

     public function lugares()
    {
        return $this->belongsTo('Apptotem\Atractivo','atractivo_id','id');
    }
}
