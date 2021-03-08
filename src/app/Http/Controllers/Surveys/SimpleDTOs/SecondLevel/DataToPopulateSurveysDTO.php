<?php

namespace App\Http\Controllers\Surveys\SimpleDTOs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\DataToPopulateSurvey;

interface ICreateAggregate {
    public function createAggregate();
}

//FIXME: BUT HOW DO I MAKE THIS EXTENSIBLE AND LESS COUPLED
class DistributeSurvey extends DistributeSurveys
{
    private $request = null;
    private $AvailableSurveysDTO = null;
    private $DataToPopulateSurveysDTO = Array();
    private $QuestionsDTO = Array();

    public function __construct(Request $request, $PopulateSurveysDTO)
    {
        $this->request = $request;
        $this->PopulateSurveysDTO = $PopulateSurveysDTO; //TIGHT COUPLING TO THE PARENT CLASS, ANOTHER SOLUTION
    }

    public function createDataToPopulateSurveysDTO() {

        $participants = [$this->request->participantOne,
            $this->request->participantTwo,
            $this->request->participantThree,
            $this->request->participantFour,
            $this->request->participantFive
        ];


        $idx = 0;
        foreach ($participants as $participant) {
            $now = date('Y-m-d H:i:s') . '';
            $this->QuestionsDTO[$idx] = new QuestionsDTO($this->request, $participant, $now, $this->QuestionDescription);
            $this->QuestionsDTO[$idx]->create();
            $this->AnswersDTO[$idx] = new AnswersDTO($this->request, $participant, $this->QuestionsDTO[$idx]);
            $this->AnswersDTO[$idx]->create();
            $idx++;
        }

        return $this->DataToPopulateSurveysDTO;

    }

}
