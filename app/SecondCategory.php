<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use App\Traits\CanTranslateCollection;
use Illuminate\Database\Eloquent\Model;


class SecondCategory extends Model
{
    use Translatable, CanTranslateCollection;   
    protected $translatable = ['name'];
}
