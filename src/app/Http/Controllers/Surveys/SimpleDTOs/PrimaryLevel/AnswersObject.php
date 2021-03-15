<?php

namespace App\Http\Controllers\Surveys\SimpleDTOs\PrimaryLevel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Surveys\SimpleDTOs\IDTO;

class AnswersObject //implements IDTO
{
    private $request = null;
    private $AnswersObject = null;
    private $participant = "";

    public function __construct($participant, $QuestionsDTO)
    {
        $this->participant = $participant;
        $this->QuestionsDTO = $QuestionsDTO;
    }
    public function create($Answers) {

        $AnswersObject = $Answers::create([
            'updated_at' => $this->QuestionsDTO->getUpdatedAt(),
            'answerValue' => 'default',
            'question_id' => $this->QuestionsDTO->getId(),
            'participant_user_id' => 7
        ]);
        return $AnswersObject;
    }
}
