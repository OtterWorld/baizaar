<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;


class Slider extends Model
{
    use Translatable;
    
    protected $translatable = ['title', 'second_title'];
}
