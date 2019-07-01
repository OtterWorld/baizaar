<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use App\Traits\CanTranslateCollection;
use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{
    use Translatable, CanTranslateCollection;
    
    protected $translatable = ['address', 'location_description'];
}
