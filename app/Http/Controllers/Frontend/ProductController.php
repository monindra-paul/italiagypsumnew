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


    public function fineplaster()
    {
        return view('frontend.products.fineplaster');
    }

    public function mouldingplaster()
    {
        return view('frontend.products.mouldingplaster');
    }

    public function vermiculiteplaster()
    {
        return view('frontend.products.vermiculite');
    }

    public function perlite()
    {
        return view('frontend.products.perlite');
    }

    public function machine()
    {
        return view("frontend.products.machineplaster");
    }

    public function jointing()
    {
        return view('frontend.products.jointingcom');
    }

    public function sixtycm()
    {
        return view('frontend.products.60cm');
    }

    public function hcm()
    {
        return view('frontend.products.100cm');
    }

    public function grg()
    {
        return view('frontend.products.grg');
    }

    public function putty()
    {
        return view('frontend.products.putty');
    }

    public function cornices()
    {
        return view('frontend.products.cornices');
    }
}
