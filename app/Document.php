<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Document extends Model
{
    public function sousgroupe()
    {
        return $this->belongsTo('App\sousGroupe');
    }

}


