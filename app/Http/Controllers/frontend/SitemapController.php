<?php

namespace App\Http\Controllers\frontend;

use App\Models\Offer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SitemapController extends Controller
{
    public function index()
    {
        $offers = Offer::latest()->limit(100)->get();
        return view('sitemap', compact('offers'));
    }
}
