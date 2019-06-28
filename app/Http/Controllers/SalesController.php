<?php

namespace App\Http\Controllers;

use App\Sale;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index(Sale $sale) {
        $sales = $sale
            ->get()
            ->shuffle();
        
        return view('sales.index', compact('sales'));
    }

    public function show(Sale $sale) {
        dd($sale);
    }
}
