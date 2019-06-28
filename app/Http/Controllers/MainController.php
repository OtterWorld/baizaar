<?php

namespace App\Http\Controllers;

use App\News;
use App\Block;
use App\Slider;
use App\Partner;
use App\RenderedSale;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(RenderedSale $renderedSale, News $news, Slider $slider, Partner $partner) {

        $sliders = $slider
            ->where('slider_type', 'main')    
            ->get();
        
        $bottomSlider = $slider
            ->where('slider_type', 'bottom')
            ->get();

        $sales = $renderedSale
            ->join('sales', 'sales.id', '=', 'rendered_sales.sale_id')
            ->get();
        
        $news = $news
            ->limit(10)
            ->latest()
            ->get();
        
        $partners = $partner
            ->get();
        
        $blocks = Block::with('style')->get();
        $styles = [];
        foreach($blocks as $key => $block) {
            if(isset($block->style)) {
                $styles[$key] = '';
                foreach($block->style as $key1 => $style) {
                    $styles[$key] .= $style->key. ':' .$style->value.';';
                }
            }
        }

        return view('main.index', compact('sales', 'news', 'sliders', 'bottomSlider', 'partners', 'styles'));
    }
}
