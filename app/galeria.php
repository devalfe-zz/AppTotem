<?php

namespace Apptotem;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $table = 'galerias';
    protected $primaryKey = 'id';
    protected $fillable = ['id','titulo','foto_url','activo','atractivo_id'];

    public function lugares()
    {
        return $this->belongsTo('Apptotem\Atractivo','atractivo_id','id');
    }
    public function fotos_cat(){
        return $this->morpTo();
    }
}
