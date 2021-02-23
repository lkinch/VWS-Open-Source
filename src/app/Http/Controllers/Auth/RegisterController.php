<?php

namespace App\Http\Controllers\Auth;

use Silber\Bouncer\Bouncer;
use Illuminate\Http\Request;
use App\Models\ParticipantUser;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('registerpage');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);

        //
        //dd($request);
        $newUser = ParticipantUser::create([ //stores the user in that table
            'name'=> $request->name,
            'username'=> $request->username,
            'email'=> $request->email,
            'password'=> Hash::make($request-> password),
        ]);
        $newUser->assign('participant');

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('dashboard');
    }
}
