<?php

namespace App\Http\Controllers\Surveys\SimpleDTOs\PrimaryLevel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Answers;

use App\Http\Controllers\Surveys\SimpleDTOs\IDTO;

class AnswersDTO implements IDTO
{
    private $request = null;
    private $AnswersDTO = null;
    private $participant = "";

    public function __construct($participant, $QuestionsDTO)
    {
        $this->participant = $participant;
        $this->QuestionsDTO = $QuestionsDTO;
    }
    public function create() {

        $AnswersDTO = Answers::create([
            'updated_at' => $this->QuestionsDTO->getUpdatedAt(),
            'answerValue' => 'default',
            'question_id' => $this->QuestionsDTO->getId(),
            'participant_user_id' => 7
        ]);
        return $this;
    }
}
