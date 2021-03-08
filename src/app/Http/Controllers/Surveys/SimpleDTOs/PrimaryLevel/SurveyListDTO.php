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
    private $SurveyListDTO = Array();

    public function __construct(Request $request, String $created_at)
    {
        $this->request = $request;
        $this->created_at = $request;
    }

    public function create() {

        $this->SurveyListDTO = SurveyList::create([
            'SurveyName' => $this->request->surveyName,
            'created_at' => $this->created_at,
            'DeliveryDate' => $this->request->programstartdate, // FIXME: This only works for the first program, should be calculated
        ]);
    }
}
