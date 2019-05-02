<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Spatie\Newsletter\Newsletter;

class NewsLetterController extends Controller
{
    //
    function index()
    {
        return view('subscribe');
    }

    public function store(request $request){
        if(! Newsletter::isSubscribed($request->email)){

            Newsletter::subscribePending($request->email);

            return redirect('subscribe')->with('Success', 'Please check Email');

        }

    return redirect('subscribe')->with('Fail','Sorry,Already Subscribed!');
    }

}
