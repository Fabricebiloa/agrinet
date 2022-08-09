<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class SousGroupe extends Model
{
    protected $table="sous_groupe";

    public function group()
    {
        return $this->belongsTo('App\Group');
    }


    public function documents()
    {
        return $this->hasMany('App\Document','sous_group_id');
    }

    public function videos()
    {
        return $this->hasMany('App\Video','sous_group_id');
    }

    public function cours()
    {
        return $this->hasMany('App\Cour','sous_group_id');
    }

    public function images()
    {
        return $this->hasMany('App\Image','sous_group_id');
    }





}
