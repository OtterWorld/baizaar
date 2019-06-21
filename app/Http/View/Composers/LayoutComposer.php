<?php

namespace App\Http\View\Composers;

use App\Shop;
use App\Contact;
use App\Partner;
use App\Category;
use App\Subcategory;
use App\NestedCategory;
use App\SecondCategory;
use Illuminate\View\View;

class LayoutComposer
{
    private $category;
    private $subCategory;
    private $shop;
    private $partner;
    private $contact;
    private $secondaryCategory;

    public function __construct(Category $category, 
        SubCategory $subCategory, 
        Shop $shop, 
        Partner $partner, 
        Contact $contact, 
        SecondCategory $secondaryCategory)
    {
        $this->category = $category;
        $this->subCategory = $subCategory;
        $this->shop = $shop;
        $this->partner = $partner;
        $this->contact = $contact;
        $this->secondaryCategory = $secondaryCategory;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $nodes = NestedCategory::get()->toTree();
        
        $categories = $this->category
            ->join('subcategories', 'subcategories.category_id','=','categories.id')
            ->get();
        
            $subCategories = $this->subCategory
            ->get();

        $shops = $this->shop
            ->get();
        
            $shops_category_id = $shops->pluck('category_id')->toArray();

        $partners = $this->partner
            ->get();
        
            $contact = $this->contact
            ->first();
        
            $sec_cat = $this->secondaryCategory
            ->get();
        $view->with(['shops_category_id' => $shops_category_id, 'subCategories' => $subCategories, 'categories' => $categories, 'sec_cat' => $sec_cat, 'nodes' => $nodes, 'shops' => $shops, 'contact' => $contact]);
    }
}