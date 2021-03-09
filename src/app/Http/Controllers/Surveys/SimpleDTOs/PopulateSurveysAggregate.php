<?php

namespace App\Http\Controllers\Surveys\SimpleDTOs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Surveys\SimpleDTOs\PrimaryLevel\SurveyListDTO;
use App\Http\Controllers\Surveys\SimpleDTOs\PrimaryLevel\QuestionsDTO;
use App\Http\Controllers\Surveys\SimpleDTOs\PrimaryLevel\AnswersDTO;

use App\Models\Questions;

interface ICreateAggregate {
    public function createAggregate();
}

interface IDTO {
    public function create();
}

class PopulateSurveysAggregate implements ICreateAggregate
{
    private $request = null;
    private $DataToPopulateSurveysDTO = null;
    private $SurveyListDTO;
    private $QuestionsArray = Array();
    public $questionDescriptions;
    public $answerDescriptions;

    public function __construct(Request $request)
    {
        $this->request = $request;
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

        $this->SurveyListDTO = new SurveyListDTO($this->request);
        $this->SurveyListDTO->create();

        foreach ($this->participants as $participant) {
            $idx = 0;
            foreach ($this->questionDescriptions as $QuestionDescription) {
                $newQuestionDTO = new QuestionsDTO($this->request, $QuestionDescription, $this->SurveyListDTO);
                $this->QuestionsArray[$idx] = $newQuestionDTO;
                $questionsModel = new Questions();
                $this->QuestionsArray[$idx]->create($questionsModel);
                $newAnswerDTO = new AnswersDTO($participant, $this->QuestionsArray[$idx]);
                $this->AnswersDTO[$idx] = $newAnswerDTO;
                $this->AnswersDTO[$idx] = $this->AnswersDTO[$idx]->create();
                $idx++;
            }
        }
        return $this->DataToPopulateSurveysDTO;
    }

}
