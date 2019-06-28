<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Traits\ChoosesNext;
use App\Traits\ChoosesPrevious;
use TCG\Voyager\Traits\Translatable;

class News extends Model
{
    use ChoosesNext, ChoosesPrevious, Translatable;
    
    protected $table = 'news';

    protected $fillable = [
        'description',
        'image',
        'month',
        'day',
    ];
}
