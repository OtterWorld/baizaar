<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class JobRequest extends Model
{
    protected $fillable = ['job_id', 'city', 'name', 'phone', 'email', 'resume', 'comment'];    
}
