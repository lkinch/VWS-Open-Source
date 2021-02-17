<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function store()
    {
        //auth()->logout();
        Auth::logout();
        //dd("ok");
        return redirect()->route('index');
    }
}
