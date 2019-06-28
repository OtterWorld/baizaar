<?php

namespace App;

use App\Traits\ChoosesNext;
use App\Traits\ChoosesPrevious;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Sale extends Model
{
    use ChoosesNext, ChoosesPrevious, Translatable;
    
    protected $translatable = ['title', 'description'];
}
