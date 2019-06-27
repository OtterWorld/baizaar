<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Advertiser extends Model
{
    protected $fillable = ["brand", "type", "area_needed", "date", "conception", "email", "name", "additional_information"];    
}
