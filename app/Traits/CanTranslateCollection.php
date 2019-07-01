<?php

namespace App\Traits;

use App\Locale\Locale;
use TCG\Voyager\Facades\Voyager;

trait CanTranslateCollection {
    public function translateCollection($collection) {
        if (Voyager::translatable($collection)) {

            return $collection
                ->translate(Locale::getLocale(), Locale::getDefaultLocale());    
        } 

        return $collection;
    }
}