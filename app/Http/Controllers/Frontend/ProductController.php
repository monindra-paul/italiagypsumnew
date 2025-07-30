<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function regular()
    {
        return view('frontend.products.regular');
    }

    public function moisture()
    {
        return view('frontend.products.moisture');
    }

    public function fire()
    {
        return view('frontend.products.fire');
    }

    public function fmr()
    {
        return view('frontend.products.fmr');
    }
}
