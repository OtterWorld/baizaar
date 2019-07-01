<?php

namespace App;

use App\Traits\ChoosesNext;

use App\Traits\ChoosesPrevious;
use TCG\Voyager\Traits\Translatable;
use App\Traits\CanTranslateCollection;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use ChoosesNext, ChoosesPrevious, Translatable, CanTranslateCollection;
    
    protected $translatable = ['title', 'description', 'text', 'month'];
    
    protected $table = 'news';

    protected $fillable = [
        'description',
        'image',
        'month',
        'day',
    ];
}
