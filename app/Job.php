<?php

namespace App;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;


class Job extends Model
{
    use Translatable;
    
    protected $translatable = ['job_title', 'experience', 'requirements', 'salary'];
}
