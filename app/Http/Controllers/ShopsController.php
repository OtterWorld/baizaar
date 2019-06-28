<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;

class ShopsController extends Controller
{
    public function show(Shop $shop) {

        $previous = Shop::previousItem($shop->id);
        $next = Shop::nextItem($shop->id);

        return view('shops.show', compact('shop', 'previous', 'next'));
    }
}

