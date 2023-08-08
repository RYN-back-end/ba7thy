<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\WhatPresent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        $whatPresent = WhatPresent::firstOrCreate([]);
        return view('FrontEnd.index',compact('sliders','whatPresent'));
    }
}//end class
