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

class SurveyListDTO implements IDTO
{
    private $request = null;
    private $SurveyListDTO = null;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->created_at = $request;
        return $this;
    }

    public function create() {

        $now = date('Y-m-d H:i:s') . '';

        $this->SurveyListDTO = SurveyList::create([
            'SurveyName' => $this->request->surveyName,
            'created_at' => $now,
            'DeliveryDate' => $this->request->programstartdate, // FIXME: This only works for the first program, should be calculated
        ]);
        return $this;
    }

    public function getId() {
        return $this->SurveyListDTO->id;
    }
}
