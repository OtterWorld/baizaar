<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class InfosController extends Controller
{
    public function index(Page $page) {
        $pages = $page
            ->where('pages.id', 2)
            ->join('page_contents', 'page_contents.page_id','=','pages.id')
            ->get()
            ->groupBy('page_name');
        
        $title = $pages->keys()[0];
        $tabs = $pages->first()->groupBy('block_name')->keys();
        $contents = $pages->first();

        return view('infos.index', compact('title', 'tabs', 'contents'));
    }
}