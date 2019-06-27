<?php 

namespace App\Traits;

Trait ChoosesNext {
    public static function nextItem($id) {
        return static::find(
            static::where('id', '>', $id)
                ->min('id')
        );   
    }
}