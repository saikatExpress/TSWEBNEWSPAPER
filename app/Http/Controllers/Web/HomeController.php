<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.partials.home');
    }

    public function category()
    {
        return view('web.partials.category');
    }

    public function about()
    {
        return view('web.partials.about');
    }

    public function latestNews()
    {
        return view('web.partials.latest-news');
    }

    public function contact()
    {
        return view('web.partials.contact');
    }

    public function elements()
    {
        return view('web.partials.pages.elements');
    }

    public function blog()
    {
        return view('web.partials.pages.blog');
    }

    public function blogDetails()
    {
        return view('web.partials.pages.blog-details');
    }

    public function categoryDetails()
    {
        return view('web.partials.pages.category-details');
    }
}