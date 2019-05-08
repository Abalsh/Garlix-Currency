<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CurrencyListing;

class API extends Controller
{
    public function index()
    {
        $data = CurrencyListing::all('iso', 'rates');

        return $data;
    }
}
