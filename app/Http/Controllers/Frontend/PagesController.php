<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        return view('frontend.pages.about');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function whyitalia()
    {
        return view('frontend.pages.whyitalia');
    }

    public function gallery()
    {
        return view('frontend.pages.gallery');
    }

    public function resources()
    {
        return view('frontend.pages.resources');
    }
}
