<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('loginpage');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {

            return back()->with('status', 'Invalid login details');
        }


        return redirect()->route('dashboard');
    }

    public function indexresearcher()
    {
        return view('loginpageresearcher');
    }

    public function storeresearcher(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        //FIXME: this authenticates participants and researchers. If a participant tries to sign-in it
        //will sign them in, then hit the controls tatements on 59-63 and kick them out saying they are not
        //an administrator which is confusing. The below should be changed to only allow admin users to login.
        $isNotAuthenticated = !auth()->attempt($request->only('email', 'password'), $request->remember);

        if ($isNotAuthenticated) {

            return back()->with('status', 'Invalid login details');
        }

        $isAdmin = auth()->user()->isAdmin();

        //This if statement ultimately shouldn't exist as-is
        if ($isAdmin) {

            return redirect()->route('dashboard');
        } else {
            return back()->with('status', 'You are not an administrator');
        }

    }
}
