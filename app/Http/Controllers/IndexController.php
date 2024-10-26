<?php

namespace App\Http\Controllers;

use App\Services\QuoteService;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    public function index()
    {
        return view('index');
    }
}
