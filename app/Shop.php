<?php

namespace App;

use App\Traits\ChoosesNext;
use App\Traits\ChoosesPrevious;
use TCG\Voyager\Traits\Translatable;
use App\Traits\CanTranslateCollection;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use ChoosesNext, ChoosesPrevious, Translatable, CanTranslateCollection;
    
    protected $translatable = ['description'];
}
