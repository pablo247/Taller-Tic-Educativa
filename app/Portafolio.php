<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portafolio extends Model
{
    protected $table = 'portafolio';

    protected $fillable = [
        'descripcion', 'imagen', 'url', 'curriculum_id'
    ];

    protected $hidden = [];

    public function curriculum()
    {
        return $this->belongsTo('App\Curriculum');
    }
}
