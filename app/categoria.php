<?php

namespace Apptotem;

use Illuminate\Database\Eloquent\Model;
//*use Apptotem\Categoria;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'titulo', 'activo'];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['icon', 'color'];

    /**
     * Get the profile photo URL attribute.
     *
     * @return string
     */
    public function getIconAttribute()
    {
        $icons = [
            'archway',
            'award',
            'hotel',
            'images',
            'map-marked-alt',
            'store',
            'server',
            'portrait',
            'passport',
            'moon',
            'map',
            'medal',
            'bookmark',
            'building',
            'bus',
            'book',
            'camera',
            'home',
            'image',
            'tags'
        ];
        return $icons[rand(0, count($icons) - 1)];
    }
    /**
     * Get the profile photo URL attribute.
     *
     * @return string
     */
    public function getColorAttribute()
    {
        $colores = [
            '#e74c3c',
            '#2ecc71',
            '#e67e22',
            '#1abc9c',
            '#9b59b6',
            '#1abcfc',
            '#bb59b6',
            '#2ebb71',
            '#e67e11',
            '#e67e55',
            '#e67e66',
            '#e45e22',
            '#a74b3c',
            '#e74f3f',
            '#2eaa71',
            '#1ab2f2',
            '#aabcfc',
            '#9c59c6',
            '#2ecc71',
            '#2ab1fa'
        ];
        return $colores[rand(0, count($colores) - 1)];
    }

    public function atractivos()
    {
        return $this->hasMany('Apptotem\Atractivo');
    }

    public function fotos()
    {
        return $this->hasManyThrough(
            'Apptotem\Galeria',
            'Apptotem\Atractivo',
            'categoria_id',
            'atractivo_id',
            'id',
            'id'
        );
    }

    public function foto_cat()
    {
        return $this->morphMany('Apptotem\Galeria', 'fotos_cat');
    }
}
