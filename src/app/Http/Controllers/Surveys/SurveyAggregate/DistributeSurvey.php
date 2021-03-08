<?php

namespace App\Http\Controllers\Surveys\SurveyAggregate;

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
    private $AvailableSurveysDTO = null;
    private $DataToPopulateSurveysDTO = Array();
    private $QuestionsDTO = Array();
    private $AnswersDTO = Array();
    private $SurveyListDTO = Array();
    private $SurveyUserListDTO = null;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    //TODO: Should be its own class from validateSurveyStore -> $createSurveyUserListDTO


    public function create() {

        $this->AvailableSurveysDTO()->create();

        $this->PopulateSurveysDTO()->create();

        $this->SurveyUserListDTO()->create();

        $this->SurveyListDTO()->create();

        $result = $this->DataToPopulateSurveysDTO()->create();

        return $result;
    }

}
