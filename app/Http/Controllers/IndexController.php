<?php

namespace App\Http\Controllers;

use App\Models\PathServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  view('home');
    }

    public function aboutUs()
    {
        $title = 'About Us';
        return  view('about-us',compact('title'));
    }
    public function quotation()
    {
        $title = 'Quotation';
        return  view('quotation-form',compact('title'));
    }
    public function price()
    {
        $title = 'Price';
        $pathServices = PathServices::where('status', 'active')->get();
        return  view('price',compact('title','pathServices'));
    }
    public function workflow()
    {
        $title = 'Workflow';
        return  view('workflow',compact('title'));
    }
    public function services()
    {
        $title = 'Services';
        return  view('services.index',compact('title'));
    }
    public function singleService($slug)
    {
        $title = ucwords(preg_replace("/[^a-zA-Z0-9]+/", " ", $slug));
        $url = explode('/', URL::current());
        if (end($url) === 'clipping-path') {
            return  view('services.clipping-path',compact('title'));
        }else if (end($url) === 'jewelry-retouch') {
            return  view('services.jewelry-retouch',compact('title'));
        }

    }

    public function contact()
    {
        $title = 'Contact';
        return  view('contact',compact('title'));
    }
}
