<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PublicController extends Controller
{
    
    public function get()
    {
        return view('landing');
    }

    public function home()
    {
        return view('landing');
    }

    public function index()
    {
        return view('landing');
    }

    public function about()
    {
        return view('aboutpage');
    }

    
}
