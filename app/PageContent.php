<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use App\Traits\CanTranslateCollection;
use Illuminate\Database\Eloquent\Model;


class PageContent extends Model
{
    use Translatable, CanTranslateCollection;
    
    protected $translatable = ['block_name', 'content'];
}
