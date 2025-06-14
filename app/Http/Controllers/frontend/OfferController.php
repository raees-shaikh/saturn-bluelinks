<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Category;
use Illuminate\Http\Request;

class OfferController extends Controller
{

    public function index()
    {
        $categories = Category::latest()->paginate(12);
        return view('frontend.latest-arrivals.all-arrival', compact('categories'));
    }
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $offers = $category->offers()->latest()->paginate(12);
        $relatedCategories = Category::where('slug', '!=', $slug)->latest()->limit(5)->get();
        // dd($relatedCategories);
        return view('frontend.latest-arrivals.single-arrival', compact('category', 'offers', 'relatedCategories'));
    }
    public function show($categorySlug, $offerSlug)
    {
        $category = Category::where('slug', $categorySlug)->firstOrFail();
        $offer = Offer::where('category_id', $category->id)->where('slug', $offerSlug)->firstOrFail();
        $relatedOffers = Offer::where('category_id', $category->id)->where('slug', '!=',$offerSlug)->latest()->limit(5)->get();

        return view('frontend.latest-arrivals.single-offer', compact('category', 'offer', 'relatedOffers'));
    }
}
