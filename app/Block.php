<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Block extends Model
{

    public function style()
    {
        return $this->hasMany('App\Style');
    }
}