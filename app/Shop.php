<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\ChoosesNext;
use App\Traits\ChoosesPrevious;

class Shop extends Model
{
    use ChoosesNext, ChoosesPrevious;    
}
