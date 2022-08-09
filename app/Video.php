<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Video extends Model
{
    public function sousgroupe()
    {
        return $this->belongsTo('App\SousGroupe','sous_group_id');
    }
}
