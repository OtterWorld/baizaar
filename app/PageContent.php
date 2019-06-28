<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;


class PageContent extends Model
{
    use Translatable;
    
    protected $translatable = ['block_name', 'content'];
}
