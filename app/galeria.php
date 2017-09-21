<?php

namespace Apptotem;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    //
    protected $table = 'galerias';
    protected $prymaryKey = 'atractivo_id';
    protected $fillable = ['titulo','foto_url','activo','atractivo_id'];
    public function lugares()
    {
        return $this->belongsTo('Apptotem\Atractivo');
    }
}
