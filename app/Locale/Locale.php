<?php

namespace App\Locale;

class Locale {

    static private $locale;
    
    static public function setLocale($locale) {
        static::$locale = $locale;
    }

    static public function getLocale() {
        if(empty(static::$locale)) {
            return static::getDefaultLocale();
        }
        return static::$locale;
    }

    static public function getDefaultLocale() {
        return config('voyager.multilingual.default');
    }
}