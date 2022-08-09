<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Group extends Model
{
    protected $table="group";


    public function sousGroup()
    {
        return $this->hasMany('App\SousGroupe','group_id');
    }
}
