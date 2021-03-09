<?php

namespace App\Http\Controllers\Surveys\SimpleDTOs\PrimaryLevel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\DataToPopulateSurvey;
use App\Models\AvailableSurveys;
use App\Models\SurveyUserList;
use App\Models\SurveyList;
use App\Models\Questions;
use App\Models\Answers;


use App\Http\Controllers\Surveys\SimpleDTOs\IDTO;

class SurveyListDTO //implements IDTO
{
    private $request = null;
    private $SurveyListDTO = null;

    public function __construct(String $surveyName, String $programStartDate)
    {
        $this->surveyName = $surveyName;
        $this->programStartDate = $programStartDate;
        return $this;
    }

    public function create(Object $SurveyList) {

        $now = date('Y-m-d H:i:s') . '';

        $this->SurveyListDTO = $SurveyList::create([
            'SurveyName' => $this->surveyName,
            'created_at' => $now,
            'DeliveryDate' => $this->programStartDate, // FIXME: This only works for the first program, should be calculated
        ]);
        return $this->SurveyListDTO;
    }

    public function getId() {
        return $this->SurveyListDTO->id;
    }
}
