<?php

namespace App;
use Kalnoy\Nestedset\NodeTrait;
use Illuminate\Database\Eloquent\Model;

class NestedCategory extends Model
{
    use NodeTrait;

    static public function traverse($categories) {
        foreach ($categories as $category) {
            echo '<li>';
            if($category->parent == null) {
                echo '<a href="#mobileMenu'.$category->id.'">'.$category->name.'</a>';
            }else {
                echo '<a href="#">'.$category->name.'</a>';
            }
            echo '</li>';
            if($category->children->count() > 0) {
                echo '<ul id="mobileMenu'.$category->id.'" style="display: none;">';
                static::traverse($category->children);
                echo '</ul>';
            }
        }
    }
    
}
