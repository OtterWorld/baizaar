<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use App\Traits\CanTranslateCollection;
use Illuminate\Database\Eloquent\Model;


class Slider extends Model
{
    use Translatable, CanTranslateCollection;
    
    protected $translatable = ['title', 'second_title'];
}
