<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Traits\ChoosesNext;
use App\Traits\ChoosesPrevious;

class News extends Model
{
    use ChoosesNext, ChoosesPrevious;
    protected $table = 'news';

    protected $fillable = [
        'description',
        'image',
        'month',
        'day',
    ];
}
