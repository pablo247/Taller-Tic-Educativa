<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RedSocial extends Model
{
    protected $table = 'red_social';

    protected $fillable = [
        'titulo', 'icono'
    ];

    protected $hidden = [];

    public function curriculums()
    {
        return $this->belongsToMany('App\Curriculum');
    }
}
