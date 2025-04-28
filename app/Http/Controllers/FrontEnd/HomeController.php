<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequestsRequest;
use App\Mail\NotifyContact;
use App\Models\AboutPage;
use App\Models\AboutUs;
use App\Http\Requests\ContactRequest;
use App\Models\AboutUsImages;
use App\Models\Articles;
use App\Models\ContactUs;
use App\Models\Counter;
use App\Models\Majors;
use App\Models\MetaOfSite;
use App\Models\Question;
use App\Models\Review;
use App\Models\Service;
use App\Models\ServicesTypes;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Step;
use App\Models\WhatPresent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Nafezly\Payments\Classes\TapPayment;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        $whatPresent = WhatPresent::firstOrCreate([]);
        $aboutUs = AboutUs::get();
        $services = Service::orderBy('position')->take(6)->get();
        $aboutUsImages = AboutUsImages::get();
        $counters = Counter::get();
        $steps = Step::get();
        $reviews = Review::latest()->get();
        $meta = MetaOfSite::where('page_name','الرئيسية')->first();
        return view('FrontEnd.index', compact('sliders','meta','reviews', 'whatPresent','steps','counters', 'aboutUs', 'aboutUsImages','services'));
    }//end fun

    public function landing(){
        $sliders = Slider::latest()->get();
        $whatPresent = WhatPresent::firstOrCreate([]);
        $aboutUs = AboutUs::get();
        $services = Service::orderBy('position')->get();
        $aboutUsImages = AboutUsImages::get();
        $counters = Counter::get();
        $steps = Step::get();
        $reviews = Review::latest()->get();
        $meta = MetaOfSite::where('page_name','الرئيسية')->first();
        return view('FrontEnd.landing', compact('sliders','meta','reviews', 'whatPresent','steps','counters', 'aboutUs', 'aboutUsImages','services'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function aboutUs()
    {
        $aboutUs = AboutUs::get();
        $aboutUsImages = AboutUsImages::get();
        $aboutRow = AboutPage::first();
        $meta = MetaOfSite::where('page_name','من نحن')->first();
        return view('FrontEnd.about-us', compact('aboutUs','meta', 'aboutUsImages','aboutRow'));
    }//end fun

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function research()
    {
        $articles = Articles::latest()->get();
        $meta = MetaOfSite::where('page_name','المدونة')->first();
        return view('FrontEnd.research', compact('articles','meta'));
    }//end fun

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function services()
    {
        $questions = Question::latest()->get();
        $services = Service::orderBy('position')->get();
        $meta = MetaOfSite::where('page_name','الخدمات')->first();
        return view('FrontEnd.services', compact('services','meta','questions'));
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
        $majors = Majors::latest()->get();
        $types = ServicesTypes::latest()->get();
        $meta = MetaOfSite::where('page_name','تواصل معنا')->first();
        return view('FrontEnd.contact',compact('majors','types','meta'));
    }//end fun


    public function postContact(ContactRequest $request)
    {
        $validatedData = $request->validated();

        Mail::to("info@bahthi.org")->send(new NotifyContact($request));

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


    public function updateClickNums(request $request){

        if($request->type == 'telegram_clicks' || $request->type == 'whatsapp_clicks'){
            $row = Setting::first();
            $row[$request->type] = $row[$request->type]+1;
            $row->save();
        }
        if($request->type == 'telegram_clicks')
            $request->social = "تليجرام";
        else
            $request->social = "واتساب";

        Mail::to("arabianacademicsolutions@gmail.com")->send(new NotifyContact($request));
    }
    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function article($url_title)
    {
        $obj = Articles::where('url_title' , $url_title)->firstOrFail();
        $another = Articles::where('url_title', '!=', $url_title)->inRandomOrder()->take(3)->get();
        return view('FrontEnd.article', compact('obj', 'another'));
    }//end fun

    public function service($url_title)
    {
        $obj = Service::where('url_title' , $url_title)->firstOrFail();
        $another = Service::where('url_title', '!=', $url_title)->inRandomOrder()->take(3)->get();
        return view('FrontEnd.service', compact('obj', 'another'));
    }//end fun

    public function privacy()
    {
        $meta = MetaOfSite::where('page_name','سياسة الخصوصية')->first();

        return view('FrontEnd/privacy',compact('meta'));

    }

    public function termsConditions()
    {
        $meta = MetaOfSite::where('page_name','الشروط والأحكام')->first();

        return view('FrontEnd/terms-conditions',compact('meta'));
    }

    public function returnPolicy()
    {
        $meta = MetaOfSite::where('page_name','سياسة الاسترجاع')->first();

        return view('FrontEnd/return-policy',compact('meta'));
    }

    public function test()
    {
        $payment = new TapPayment();

//pay function
        $response = $payment->pay(
            20,
            $user_id = null,
            $user_first_name = "عميل",
            $user_last_name = "بحثي",
            $user_email = "email@gmail.com",
            $user_phone = "966555555555",
            $source = null
        );

        return $response;

    }


}//end class
