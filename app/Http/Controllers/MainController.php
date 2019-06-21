<?php

namespace App\Http\Controllers;

use App\Slider;
use App\RenderedSale;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(RenderedSale $renderedSale) {
        
        $sales = $renderedSale
            ->join('sales', 'sales.id', '=', 'rendered_sales.sale_id')
            ->get();
        
        return view('main.index', compact('sales'));
    }
}
