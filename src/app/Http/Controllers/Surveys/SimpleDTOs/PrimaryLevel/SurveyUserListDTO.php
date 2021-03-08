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
    private $SurveyUserListDTO = null;

    public function __construct(Request $request, $AvailableSurveysDTO)
    {
        $this->request = $request;
        $this->AvailableSurveys = $AvailableSurveysDTO;
    }

    public function create() {

        $this->SurveyUserListDTO = SurveyUserList::create([
            'updated_at' => date('Y-m-d H:i:s') . '',
            'isCompleted' => false,
            'user_id' => Auth::id(),
            'survey_id' => $this->AvailableSurveysDTO->getId(),
            'ProgramStartDate' => $this->AvailableSurveysDTO->getProgramStartDate()
        ]);

        return $this->SurveyUserListDTO;

    }
}
