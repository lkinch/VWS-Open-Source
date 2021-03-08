<?php

namespace App\Http\Controllers\Surveys\SimpleDTOs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Answers;

class AnswersDTO
{
    private $request = null;
    private $AnswersDTO = Array();
    private $participant = "";

    public function __construct(Request $request, $QuestionsDTO)
    {
        $this->request = $request;
        $this->participant = $participant;
        $this->QuestionsDTO = $QuestionsDTO;
    }
    private function create() {

        $AnswersDTO[$idx] = Answers::create([
            'updated_at' => $this->QuestionsDTO->getUpdatedAt(),
            'answerValue' => 'default',
            'question_id' => $this->QuestionsDTO->getId(),
            'participant_user_id' => 7
        ]);
        $idx++;
    }
}
