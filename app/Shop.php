<?php

namespace App;

use App\Traits\ChoosesNext;
use App\Traits\ChoosesPrevious;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use ChoosesNext, ChoosesPrevious, Translatable;
    
    protected $translatable = ['description'];
}
