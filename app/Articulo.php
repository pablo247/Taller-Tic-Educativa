<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulo';

    protected $fillable = [
        'titulo', 'alias', 'imagen', 'introduccion', 'contenido', 'publicado', 'fecha_publicacion', 'usuario_id'
    ];

    protected $hidden = [];

    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'usuario_id');
    }
}
