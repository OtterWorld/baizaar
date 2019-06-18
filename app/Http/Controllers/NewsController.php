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
class NewsController extends Controller
{
    //
	private $id = 0;
    public function execute($id1,$id){
    	

    	$news = News::find($id);
    	if(!isset($news)){
    		if($id1<$id)
    			$news = News::limit(1)->where('id','>',$id)->first();
  			else
  				$news = News::limit(1)->where('id','<',$id)->first();

  		}
    	if(!isset($news))
    		$news = News::first();
    	
        $sec_cat = SecondCategory::get();
    	$categories = Category::get()->toArray();
        $subcategories = Subcategory::get();
        $shops = Shop::get()->toArray();
        $partners = Partner::get();
        $contact = Contact::first();
    	return view('news',compact('categories','subcategories','shops','partners','contact','sec_cat','news'));
    }	

}
