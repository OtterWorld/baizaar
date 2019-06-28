<?php

namespace App;

use App\Traits\ChoosesNext;
use App\Traits\ChoosesPrevious;
use Illuminate\Database\Eloquent\Model;


class Sale extends Model
{
    use ChoosesNext, ChoosesPrevious;        
}
