<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Image extends Model
{
    public function sousgroupe()
    {
        return $this->belongsTo('App\SousGroupe');
    }
}
