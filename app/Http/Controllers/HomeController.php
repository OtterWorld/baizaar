<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;
use App\Shop;
use App\Partner;
use App\Contact;
use App\SecondCategory;
use App\News;
class HomeController extends Controller
{
    //
    public function execute(){

		// $categories = Category::get()->toArray();
    	// $subcategories = Subcategory::get();
    	// $shops = Shop::get()->toArray();
    	$partners = Partner::get();
    	// $contact = Contact::first();
    	// $sec_cat = SecondCategory::get();
    	$news = News::get();

    	//dd($news);
		return view('index1',compact(/*'categories','subcategories','shops','contact','sec_cat',*/'news','partners'));
    }
}
