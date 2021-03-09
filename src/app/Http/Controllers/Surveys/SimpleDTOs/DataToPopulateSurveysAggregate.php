<?php

namespace App\Http\Controllers\Surveys\SimpleDTOs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Surveys\SimpleDTOs\PrimaryLevel\AvailableSurveysDTO;
use App\Http\Controllers\Surveys\SimpleDTOs\PrimaryLevel\DataToPopulateSurveysDTO;
use App\Http\Controllers\Surveys\SimpleDTOs\PrimaryLevel\DataToSurveyUserListDTO;
use App\Http\Controllers\Surveys\SimpleDTOs\PrimaryLevel\SurveyUserListDTO;

use App\Models\AvailableSurveys;
use App\Models\Answers;
use App\Models\DataToPopulateSurvey;
use App\Models\SurveyUserList;

class DataToPopulateSurveysAggregate
{
    private $request = null;
    private $PopulateSurveysAggregate;
    private $SurveyUserListDTO;
    private $AvailableSurveysDTO;

    public function __construct(Request $request)
    {

        $this->SurveyName = $request->surveyName;
        $this->DeliveryFreq = $request->deliveryfrequency;
        $this->programStartDate = $request->programstartdate;
        $this->chooseSurvey = $request->chooseSurvey;

        $this->questionDescriptions = [$request->questionOne, $request->questionTwo, $request->questionThree,
            $request->questionFour, $request->questionFive, $request->questionSix, $request->questionSeven,
            $request->questionEight, $request->questionNine];

        $this->answerDescriptions = [$request->questionOneLikert, $request->questionTwoLikert, $request->questionThreeLikert,
            $request->questionFourLikert, $request->questionFiveLikert, $request->questionSixLikert, $request->questionSevenLikert,
            $request->questionEightLikert, $request->questionNineLikert];

        $this->participants = [$request->participantOne,
            $request->participantTwo,
            $request->participantThree,
            $request->participantFour,
            $request->participantFive
        ];
    }

    public function createAggregate(
        Object $AvailableSurveys = null, 
        Object $modelDataToPopulateSurvey = null,
        Object $modelSurveyUserList = null
        ) {

        if($AvailableSurveys === null)
            $AvailableSurveys = new AvailableSurveys();

        if($modelDataToPopulateSurvey === null)
            $modelDataToPopulateSurvey = new DataToPopulateSurvey();

        if($modelSurveyUserList === null)
            $modelSurveyUserList = new SurveyUserList();

        $this->AvailableSurveysDTO = new AvailableSurveysDTO($this->SurveyName, $this->DeliveryFreq, $this->programStartDate);
        $this->AvailableSurveysDTO->create($AvailableSurveys);

        $authId = Auth::id();
        $this->SurveyUserListDTO = new SurveyUserListDTO($authId, $this->AvailableSurveysDTO->getId(), $this->programStartDate);
        $modelSurveyUserList = new SurveyUserList();
        $this->SurveyUserListDTO->create($modelSurveyUserList);

        for ($i = 0; $i < 9; $i++) {
            $this->DataToPopulateSurveyDTO[$i] = new DataToPopulateSurveysDTO($i, $this->questionDescriptions[$i], $this->answerDescriptions[$i]);
            $this->DataToPopulateSurveyDTO[$i]->create($this->AvailableSurveysDTO, $modelDataToPopulateSurvey);
        }

        return $this;

    }

}
