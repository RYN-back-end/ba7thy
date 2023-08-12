<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequestsRequest;
use App\Models\AboutUs;
use App\Http\Requests\ContactRequest;
use App\Models\AboutUsImages;
use App\Models\Articles;
use App\Models\ContactUs;
use App\Models\Majors;
use App\Models\Service;
use App\Models\ServicesTypes;
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
        $articles = Articles::latest()->get();
        return view('FrontEnd.research', compact('articles'));
    }//end fun

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function services()
    {
        $services = Service::latest()->get();
        return view('FrontEnd.services', compact('services'));
    }//end fun

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function askService()
    {
        $majors = Majors::latest()->get();
        $types = ServicesTypes::latest()->get();
        return view('FrontEnd.askService', compact('majors', 'types'));
    }//end fun

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function contact()
    {
        return view('FrontEnd.contact');
    }//end fun

    /**
     * @param ContactRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function postContact(ContactRequest $request)
    {
        $validatedData = $request->validated();
        ContactUs::create($validatedData);
        return response()->json(['status' => 200]);
    }//end fun

    /**
     * @param ContactRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeRequest(StoreRequestsRequest $request)
    {
        $validatedData = $request->validated();
        \App\Models\Request::create($validatedData);
        return response()->json(['status' => 200]);
    }//end fun

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function article($id)
    {
        $obj = Articles::findOrFail($id);
        $another = Articles::where('id', '!=', $id)->inRandomOrder()->take(3)->get();
        return view('FrontEnd.article', compact('obj', 'another'));
    }//end fun

    public function service($id)
    {
        $obj = Service::findOrFail($id);
        $another = Service::where('id', '!=', $id)->inRandomOrder()->take(3)->get();
        return view('FrontEnd.service', compact('obj', 'another'));
    }//end fun
}//end class
