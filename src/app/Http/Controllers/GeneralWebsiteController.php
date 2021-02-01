<?php

namespace App\Http\Controllers;

use App\Jobs\GetFood;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class GeneralWebsiteController extends Controller
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

    public function dashboard()
    {
        return view('dashboard/index');
    }
}
