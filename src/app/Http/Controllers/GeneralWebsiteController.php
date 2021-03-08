<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

use App\models\User;

class GeneralWebsiteController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

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
        return view('welcome');
    }

    public function about()
    {
        return view('aboutpage');
    }

    public function dashboard() {
        return view('dashboard.index');
    }

    public function showProfileData($id){
        $data = User::find($id);
        return view('userProfilePage',['data'=>$data]);
    }

    public function updateProfile(Request $req) {
        $data = User::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->name=$req->name;
        $data->save();
        return redirect('userProfilePage');
    }
}
