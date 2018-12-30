<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conocimiento extends Model
{
    protected $table = 'conocimiento';

    protected $fillable = [
        'icono', 'titulo', 'descripcion', 'curriculum_id'
    ];

    protected $hidden = [];

    public function curriculum()
    {
        return $this->belongsTo('App\Curriculum');
    }
}
