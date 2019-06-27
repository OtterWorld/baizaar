<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class AboutsController extends Controller
{
    public function index(Page $page) {
        $pages = $page
            ->join('page_contents', 'page_contents.page_id','=','pages.id')
            ->get()
            ->groupBy('page_name');
        
        $slider = $page
            ->select('page_sliders.slider_images')
            ->where('pages.id', 1)
            ->join('page_sliders', 'page_sliders.page_id','=','pages.id')
            ->first();
            
        $slider->slider_images = collect(json_decode($slider->slider_images))->split(2);
        
        return view('abouts.index', compact('pages', 'slider'));
    }
}
