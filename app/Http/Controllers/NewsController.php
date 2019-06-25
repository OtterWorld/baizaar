<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index(News $news) {

		$news = $news->get();

		return view('news.index', compact('news'));
	}

	public function show(News $news) {
		switch($news->news_type_id) {
			case 1: 
				$view = 'slider';
				break;
			case 2:
				$view = 'text';
				break;
			case 3:
				$view = 'video';
				break;
			default:
				$view = 'text';
		}

		return view('news.show-'.$view, compact('news'));
	}
}