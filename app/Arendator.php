<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Arendator extends Model
{
    protected $fillable = [
        "shop_name",
        "brand",
        "activity_profile",
        "company_structure",
        "target_audience",
        "file",
        "market_experience",
        "target_segment",
        "amount_of_opened_shops",
        "needed_help",
        "floor",
        "phones",
        "email",
        "site",
        "name",
        "additional_information",
    ];
}
