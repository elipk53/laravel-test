<?php

namespace App\Http\Controllers;

use App\Services\QuoteService;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
