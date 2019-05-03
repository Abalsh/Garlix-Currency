<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    public function create()
    {
        return view('subscribe');
    }

    public function store(Request $request)
    {
        if ( ! Newsletter::isSubscribed($request->email) )
        {
            Newsletter::subscribePending($request->email);
            return redirect('subscribe')->with('success', 'Thanks For Subscribing! Check your Inbox!');
        }
        return redirect('subscribe')->with('failure', 'Sorry! You have already subscribed ');

    }
}
