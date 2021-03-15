<?php

namespace App\Http\Controllers\Surveys\SimpleDTOs\PrimaryLevel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Surveys\SimpleDTOs\PrimaryLevel\SurveyListDTO;
use App\Http\Controllers\Surveys\SimpleDTOs\PrimaryLevel\AvailableSurveysDTO;
use App\Http\Controllers\Surveys\SimpleDTOs\PrimaryLevel\QuestionsDTO;
use App\Http\Controllers\Surveys\SimpleDTOs\PrimaryLevel\AnswersDTO;

class DataToPopulateSurveysObject
{
    private $request = null;
    private $PopulateSurveysAggregate;
    private $QuestionDescription;
    private $QuestionNum;
    private $AnswerDescription;

    public function __construct(Int $QuestionNum, String $QuestionDescription, String $AnswerDescription)
    {
        $this->QuestionNum = $QuestionNum;
        $this->QuestionDescription = $QuestionDescription;
        $this->AnswerDescription = $AnswerDescription;

    }

    public function create($AvailableSurveysDTO, $DataToPopulateSurvey) {

        $now = date('Y-m-d H:i:s') . '';
        $this->DataToPopulateSurveysObject = $DataToPopulateSurvey::create([
            'updated_at' => $now,
            'QuestionNum' => $this->QuestionNum,
            'QuestionDescription' => $this->QuestionDescription,
            'AnswerNum' => 1,
            'AnswerDescription' => 'Likert ' . $this->AnswerDescription,
            'survey_id' => $AvailableSurveysDTO->getId()
        ]);

        return $this;

    }

}
