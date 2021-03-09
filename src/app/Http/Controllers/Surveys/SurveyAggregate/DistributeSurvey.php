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

use App\Http\Controllers\Surveys\SimpleDTOs\PopulateSurveysAggregate;
use App\Http\Controllers\Surveys\SimpleDTOs\DataToPopulateSurveysAggregate;
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


        $result[0] = new PopulateSurveysAggregate($this->request);
        $result[1] = new DataToPopulateSurveysAggregate($this->request);

        $result[0]->createAggregate();
        $result[1]->createAggregate();

        return $result;
    }

}
