<?php 

namespace App\Traits;

Trait ChoosesPrevious {
    public static function previousItem($id) {
        return static::find(
            static::where('id', '<', $id)
                ->max('id')
        );                
    }
}