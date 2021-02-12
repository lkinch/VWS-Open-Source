<?php

namespace App\Http\Controllers\Surveys;

use App\Models\AppendixO;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function index()
    {
        return view('dashboard/sampleSurvey');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'age' => 'required|max:255',
            'gender' => 'required|max:255',
            'height' => 'required|max:255',
            'weight' => 'required|max:255',
            'occupation' => 'required|max:255',
            'employment' => 'required|max:255',
            'chronic_conditions' => 'required|max:255'
        ]);

        $newUser = AppendixO::create([
            'age' => $request->age,
            'gender' => $request->gender,
            'height' => $request->height,
            'weight' => $request->weight,
            'occupation' => $request->occupation,
            'employment' => $request->employment,
            'chronic_conditions' => $request->chronic_conditions,
        ]);

        return redirect()->route('dashboard');
    }

}
