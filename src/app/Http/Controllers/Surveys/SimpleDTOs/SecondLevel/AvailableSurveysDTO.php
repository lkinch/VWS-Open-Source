<?php

namespace App\Http\Controllers\Surveys\SimpleDTOs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AvailableSurveys;

class DistributeSurvey
{
    private $AvailableSurveysDTO = null;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function create() {

        $this->AvailableSurveysDTO = AvailableSurveys::create([
            'updated_at' => date('Y-m-d H:i:s') . '',
            'SurveyName' => $this->request->surveyName,
            'DeliveryFreq' => $this->request->deliveryfrequency,
            'ProgramStartDate' => $this->request->programstartdate
        ]);

        return $this->AvailableSurveysDTO;
    }

}
