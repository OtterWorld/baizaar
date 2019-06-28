<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{
    use Translatable;
    
    protected $translatable = ['address', 'location_description'];
}
