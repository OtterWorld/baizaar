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
    /**
     * SELECT id, title, SUBSTRING(news.body , (SELECT POSITION("libero" IN news.body)), 25) AS body FROM news WHERE MATCH(body) AGAINST('libero*')
     */
    public function index(Request $request, News $news, Shop $shop, Sale $sale) {
        if($request->has('query'))
        {
            $query = $request->input('query');
            $newsResult = $news->selectRaw("id,title, SUBSTRING(news.text , (SELECT POSITION('".$query."' IN news.text)), 140) AS body")
                ->WhereRaw("MATCH(news.text) AGAINST('*".$query."*' IN BOOLEAN MODE)")
                ->get();
            
            $shopsResult = $shop->select(['id', 'name as title'])
                ->where('name','LIKE', '%'.$query.'%')
                ->get();
            
            $salesResult = $sale
                ->select(['id', 'title',\DB::raw('CONCAT(substr(description, 1, 75), "...") as description')])
                ->where('description','LIKE', '%'.$query.'%')
                ->where('title','LIKE', '%'.$query.'%')
                ->get();
            
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
            
            return view('searches.index', compact('paginatedSearchResults', 'query'));
        }
        return abort(404);
    }
}
