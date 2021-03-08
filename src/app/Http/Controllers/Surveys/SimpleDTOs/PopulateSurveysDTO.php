<?php

namespace App\Http\Controllers\Surveys\SimpleDTOs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\DataToPopulateSurvey;
use App\Models\AvailableSurveys;
use App\Models\SurveyUserList;
use App\Models\SurveyList;
use App\Models\Questions;
use App\Models\Answers;

class DistributeSurvey
{
    private $request = null;
    private $DataToPopulateSurveysDTO = Array();

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function createAggregate() {

        $this->$questionDescriptions = [$this->request->questionOne, $this->request->questionTwo, $this->request->questionThree,
            $this->request->questionFour, $this->request->questionFive, $this->request->questionSix, $this->request->questionSeven,
            $this->request->questionEight, $this->request->questionNine];

        $this->$answerDescriptions = [$this->request->questionOneLikert, $this->request->questionTwoLikert, $this->request->questionThreeLikert,
            $this->request->questionFourLikert, $this->request->questionFiveLikert, $this->request->questionSixLikert, $this->request->questionSevenLikert,
            $this->request->questionEightLikert, $this->request->questionNineLikert];

        for ($i = 0; $i < 9; $i++) {
            $this->DataToPopulateSurveysDTO[$i] = new DataToPopulateSurveysDTO($this->request, $i);
            $this->DataToPopulateSurveysDTO[$i]->create();
        }

        return $this->DataToPopulateSurveysDTO;
    }

}
