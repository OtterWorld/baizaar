<?php

namespace App\Http\Controllers;

use App\News;
use App\Sale;
use App\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class SearchController extends Controller
{
    public function index(Request $request, News $news, Shop $shop, Sale $sale) {
        $newsResult = $news->select(['id', 'title'])->where('title','LIKE', '%'.$request->input('query').'%')->get();
        $shopsResult = $shop->select(['id', 'name as title'])->where('name','LIKE', '%'.$request->input('query').'%')->get();
        $salesResult = $sale->select(['id', \DB::raw('CONCAT(substr(description, 1, 75), "...") as title')])->where('description','LIKE', '%'.$request->input('query').'%')->get();

        $searchResults = collect([])->merge($newsResult)->merge($shopsResult)->merge($salesResult);

         //Get current page form url e.g. &page=6
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        //Create a new Laravel collection from the array data
        $collection = new Collection($searchResults);
        //Define how many items we want to be visible in each page
        $perPage = 6;

        //Slice the collection to get the items to display in current page
        $currentPageSearchResults = $collection->slice(($currentPage - 1) * $perPage, $currentPage * $perPage)->all();
        
        //Create our paginator and pass it to the view
        $paginatedSearchResults = (new LengthAwarePaginator($currentPageSearchResults, count($collection), $perPage))
            ->setPath(route('search.page'))    
            ->appends($request->all());
        
        return view('searches.index', compact('paginatedSearchResults'));
    }
}
