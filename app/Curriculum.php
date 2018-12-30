<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    protected $table = 'curriculum';

    protected $fillable = [
        'id', 'banner', 'titulo', 'acerca', 'mensaje_contacto'
    ];

    protected $hidden = [];

    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'id');
    }

    public function redes_sociales()
    {
        return $this->belongsToMany('App\RedSocial', 'curriculum_red_social')->withPivot('curriculum_id', 'red_social_id', 'url')->withTimestamps();
    }

    public function conocimientos()
    {
        return $this->hasMany('App\Conocimiento');
    }

    public function potafolios()
    {
        return $this->hasMany('App\Portafolio');
    }
}
