<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\AboutUsImages;
use App\Models\Slider;
use App\Models\WhatPresent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        $whatPresent = WhatPresent::firstOrCreate([]);
        $aboutUs = AboutUs::get();
        $aboutUsImages = AboutUsImages::get();
        return view('FrontEnd.index', compact('sliders', 'whatPresent', 'aboutUs', 'aboutUsImages'));
    }//end fun

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function aboutUs()
    {
        $aboutUs = AboutUs::get();
        $aboutUsImages = AboutUsImages::get();
        return view('FrontEnd.about-us', compact('aboutUs', 'aboutUsImages'));
    }//end fun
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function research()
    {
        return view('FrontEnd.research');
    }//end fun

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function services()
    {
        return view('FrontEnd.services');
    }//end fun
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function askService()
    {
        return view('FrontEnd.askService');
    }//end fun
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function contact()
    {
        return view('FrontEnd.contact');
    }//end fun
}//end class
