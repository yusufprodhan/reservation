<?php

namespace App\Http\Controllers;

use App\Models\PathServices;
use App\Models\Quotation;
use App\Models\User;
use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

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
    public function quotationFormSubmit(Request $request)
    {
        $data = $request->except('_token');
        $quotation = new Quotation();
        $quotation->create($data + ['uid' =>Str::uuid(),'quotationId'=>'QUN'.date('dm').random_int(1000,9999)]);

        //send mail to user
        $user = User::where('id', $data['user_id'])->first();
        $body = 'Hi, hope your are well. A moving request has come to you. See below the details:';
        $body.= 'Name: '.$data->name;
        $body.= 'Phone: '.$data->phone;
        $body.= 'Email: '.$data->email;
        $body.= 'Date: '.$data->date;
        $body.= 'Moving From: '.$data->movingFrom;
        $body.= 'Moving To: '.$data->movingTo;
        $body.= 'Moving Size: '.$data->moveSize;
        $body.= 'Instruction: '.$data->instruction;
        $details['subject'] = 'Requested moving quotation';
//        $details['greeting'] = 'Hello ' . $user->name;
        $details['body'] = $body;
        $details['endText'] = '';
        Notification::send($user, new SendEmailNotification($details));

        return redirect()->back()->with('success', 'Quotation submit successfully. Our support will contract you within few hours.');
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
