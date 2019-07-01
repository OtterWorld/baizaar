<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use App\Traits\CanTranslateCollection;
use Illuminate\Database\Eloquent\Model;


class Page extends Model
{
    use Translatable, CanTranslateCollection;

    protected $translatable = ['page_name'];
}