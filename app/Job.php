<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use App\Traits\CanTranslateCollection;
use Illuminate\Database\Eloquent\Model;


class Job extends Model
{
    use Translatable, CanTranslateCollection;
    
    protected $translatable = ['job_title', 'experience', 'requirements', 'salary'];
}
