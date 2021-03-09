<?php

namespace App\Http\Controllers\Surveys\SimpleDTOs\PrimaryLevel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Questions;

class QuestionsDTO
{
    private $request = null;
    private $QuestionsDTO = null;
    private $QuestionDescription;
    private $SurveyListDTO;

    public function __construct(Request $request, String $QuestionDescription, $SurveyListDTO)
    {
        $this->request = $request;
        $this->QuestionDescription = $QuestionDescription;
        $this->SurveyListDTO = $SurveyListDTO;
    }
    public function create(Object $Questions) {

        $now = date('Y-m-d H:i:s') . '';

        $this->QuestionsDTO = $Questions::create([
            'updated_at' => $now,
            'Description' => $this->QuestionDescription,
            'isAnsweredRepeatedly' => false,
            'survey_lists_id' => $this->SurveyListDTO->getId()
        ]);
        return $this->QuestionsDTO;
    }

    public function getUpdatedAt() {
        return $this->QuestionsDTO->updated_at;
    }

    public function getId() {
        return $this->QuestionsDTO->id;
    }
}
