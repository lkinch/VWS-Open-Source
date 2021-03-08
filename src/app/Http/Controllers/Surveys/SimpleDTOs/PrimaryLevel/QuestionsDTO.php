<?php

namespace App\Http\Controllers\Surveys\SimpleDTOs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Questions;

class QuestionsDTO
{
    private $request = null;
    private $QuestionsDTO = null;

    public function __construct(Request $request, String $updated_at, String $QuestionDescription)
    {
        $this->request = $request;
        $this->updated_at = $updated_at;
        $this->QuestionDescription;
    }

    public function create() {

        $this->QuestionsDTO = Questions::create([
            'updated_at' => $this->updated_at,
            'Description' => $this->QuestionDescription,
            'isAnsweredRepeatedly' => false,
            'survey_lists_id' => $this->SurveyListDTO->id
        ]);

    }
}
