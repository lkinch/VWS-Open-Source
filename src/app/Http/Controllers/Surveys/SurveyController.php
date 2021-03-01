<?php

namespace App\Http\Controllers\Surveys;

use App\Models\AppendixO;
use App\Models\DataToPopulateSurvey;
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
            'inputAge' => 'required|max:255',
            'gender' => 'required|in:male,female',
            'inputHeight' => 'required|max:255',
            'inputWeight' => 'required|max:255',
            'inputOccupation' => 'required|max:255',
            'inputEmployment' => 'required|max:255',
            'chronic' => 'required|max:255'
        ]);

         AppendixO::create([
            'age' => $request->inputAge,
            'gender' => $request->gender,
            'height' => $request->inputHeight,
            'weight' => $request->inputWeight,
            'occupation' => $request->inputOccupation,
            'employment' => $request->inputEmployment,
            'chronic_conditions' => $request->chronic,
        ]);

        return redirect()->route('dashboard');
    }

    public function showDistributeSurvey() {
        return view('dashboard/distributeSurvey');
    }

    public function DistributeSurveyStore(Request $request) {

        $this->validate($request, [
            'surveyName' => 'required|max:255',
            'chooseSurvey' => 'required|max:255',
            'participantOne' => 'required|max:255',
            'participantTwo' => 'required|max:255',
            'participantThree' => 'required|max:255',
            'participantFour' => 'required|max:255',
            'participantFive' => 'required|max:255',
            'questionOne' => 'required|max:255',
            'questionTwo' => 'required|max:255',
            'questionThree' => 'required|max:255',
            'questionFour' => 'required|max:255',
            'questionFive' => 'required|max:255',
            'questionOneLikert' => 'required|max:255',
            'questionTwoLikert' => 'required|max:255',
            'questionThreeLikert' => 'required|max:255',
            'questionFourLikert' => 'required|max:255',
            'questionFiveLikert' => 'required|max:255'
        ]);

         DataToPopulateSurvey::create([
            'surveyName' => $request->inputAge,
            'chooseSurvey' => $request->chooseSurvey,
            'participantOne' => $request->participantOne,
            'participantTwo' => $request->participantTwo,
            'participantThree' => $request->participantThree,
            'participantFour' => $request->participantFour,
            'participantFive' => $request->participantFive,
            'questionOne' => $request->questionOne,
            'questionTwo' => $request->questionTwo,
            'questionThree' => $request->questionThree,
            'questionFour' => $request->questionFour,
            'questionFive' => $request->questionFive,
            'questionOneLikert' => $request->questionOneLikert,
            'questionTwoLikert' => $request->questionTwoLikert,
            'questionThreeLikert' => $request->questionThreeLikert,
            'questionFourLikert' => $request->questionFourLikert,
            'questionFiveLikert' => $request->questionFiveLikert
        ]);
        $request->dd();

        return redirect()->route('dashboard');
    }

}
