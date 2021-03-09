<?php

namespace App\Http\Controllers\Surveys\SimpleDTOs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\DataToPopulateSurvey;

use App\Http\Controllers\Surveys\SimpleDTOs\PrimaryLevel\AvailableSurveysDTO;
use App\Http\Controllers\Surveys\SimpleDTOs\PrimaryLevel\DataToPopulateSurveysDTO;

class DataToPopulateSurveysAggregate
{
    private $request = null;
    private $PopulateSurveysAggregate;

    public function __construct(Request $request)
    {
        $this->request = $request;

        $this->AvailableSurveysDTO = new AvailableSurveysDTO($request);

        $this->questionDescriptions = [$this->request->questionOne, $this->request->questionTwo, $this->request->questionThree,
            $this->request->questionFour, $this->request->questionFive, $this->request->questionSix, $this->request->questionSeven,
            $this->request->questionEight, $this->request->questionNine];

        $this->answerDescriptions = [$this->request->questionOneLikert, $this->request->questionTwoLikert, $this->request->questionThreeLikert,
            $this->request->questionFourLikert, $this->request->questionFiveLikert, $this->request->questionSixLikert, $this->request->questionSevenLikert,
            $this->request->questionEightLikert, $this->request->questionNineLikert];

        $this->participants = [$this->request->participantOne,
            $this->request->participantTwo,
            $this->request->participantThree,
            $this->request->participantFour,
            $this->request->participantFive
        ];
    }

    public function createAggregate() {

        $this->AvailableSurveysDTO = new AvailableSurveysDTO($this->request);
        $this->AvailableSurveysDTO->create();
        for ($i = 0; $i < 9; $i++) {
            $this->DataToPopulateSurveyDTO[$i] = new DataToPopulateSurveysDTO($i, $this->questionDescriptions[$i], $this->answerDescriptions[$i]);
            $this->DataToPopulateSurveyDTO[$i]->create($this->AvailableSurveysDTO);
        }

        return $this;

    }

}
