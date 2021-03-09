<?php

namespace App\Http\Controllers\Surveys\SimpleDTOs\PrimaryLevel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AvailableSurveys;

use App\Http\Controllers\Surveys\SimpleDTOs\IDTO;
class AvailableSurveysDTO //implements IDTO
{
    private $AvailableSurveysDTO = null;

    public function __construct(String $SurveyName, String $DeliveryFreq, String $programStartDate)
    {
        $this->updated_at = date('Y-m-d H:i:s') . '';
        $this->SurveyName = $SurveyName;
        $this->DeliveryFreq = $DeliveryFreq;
        $this->programStartDate = $programStartDate;
    }

    public function create($AvailableSurveys) {

        $this->AvailableSurveysDTO = $AvailableSurveys::create([
            'updated_at' => $this->updated_at,
            'SurveyName' => $this->SurveyName,
            'DeliveryFreq' => $this->DeliveryFreq,
            'ProgramStartDate' => $this->programStartDate
        ]);

        return $this->AvailableSurveysDTO;
    }

    public function getId() {
        return $this->AvailableSurveysDTO->id;
    }

}
