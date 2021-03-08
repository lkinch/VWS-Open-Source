<?php

namespace App\Http\Controllers\Surveys\SurveyAggregate;

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
    private $AvailableSurveysDTO = null;
    private $DataToPopulateSurveysDTO = Array();
    private $QuestionsDTO = Array();
    private $AnswersDTO = Array();
    private $SurveyListDTO = Array();
    private $SurveyUserListDTO = null;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    //TODO: Should be its own class from validateSurveyStore -> $createSurveyUserListDTO


    public function create() {

        $this->createAvailableSurveysDTO();

        $this->createPopulateSurveysDTO();

        $this->createSurveyUserListDTO();

        $this->createSurveyListDTO();

        $result = $this->createDataToPopulateSurveysDTO();

        return $result;
    }

    public function createAvailableSurveysDTO() {

        $this->AvailableSurveysDTO = AvailableSurveys::create([
            'updated_at' => date('Y-m-d H:i:s') . '',
            'SurveyName' => $this->request->surveyName,
            'DeliveryFreq' => $this->request->deliveryfrequency,
            'ProgramStartDate' => $this->request->programstartdate
        ]);

        return $this->AvailableSurveysDTO;
    }

    public function createPopulateSurveysDTO() {

        $questionDescriptions = [$this->request->questionOne, $this->request->questionTwo, $this->request->questionThree,
            $this->request->questionFour, $this->request->questionFive, $this->request->questionSix, $this->request->questionSeven,
            $this->request->questionEight, $this->request->questionNine];

        $answerDescriptions = [$this->request->questionOneLikert, $this->request->questionTwoLikert, $this->request->questionThreeLikert,
            $this->request->questionFourLikert, $this->request->questionFiveLikert, $this->request->questionSixLikert, $this->request->questionSevenLikert,
            $this->request->questionEightLikert, $this->request->questionNineLikert];

        for ($i = 0; $i < 9; $i++) {
            $this->DataToPopulateSurveysDTO[$i] = DataToPopulateSurvey::create([
                'updated_at' => $this->AvailableSurveysDTO->updated_at,
                'QuestionNum' => $i + 1,
                'QuestionDescription' => $questionDescriptions[$i],
                'AnswerNum' => 1,
                'AnswerDescription' => 'Likert ' . $answerDescriptions[$i],
                'survey_id' => $this->AvailableSurveysDTO->id
            ]);
        }

        return $this->DataToPopulateSurveysDTO;
    }

    public function createSurveyUserListDTO() {

        $this->SurveyUserListDTO = SurveyUserList::create([
            'updated_at' => date('Y-m-d H:i:s') . '',
            'isCompleted' => false,
            'user_id' => Auth::id(),
            'survey_id' => $this->AvailableSurveysDTO->id,
            'ProgramStartDate' => $this->AvailableSurveysDTO->ProgramStartDate
        ]);

        return $this->SurveyUserListDTO;

    }

    public function createSurveyListDTO() {

        $this->SurveyListDTO = SurveyList::create([
            'SurveyName' => $this->request->surveyName,
            'created_at' => $this->AvailableSurveysDTO->created_at,
            'DeliveryDate' => $this->request->programstartdate, // FIXME: This only works for the first program, should be calculated
        ]);
    }

    // TODO: Needs to be a seperate Class
    public function createDataToPopulateSurveysDTO() {

        $participants = [$this->request->participantOne,
            $this->request->participantTwo,
            $this->request->participantThree,
            $this->request->participantFour,
            $this->request->participantFive
        ];

        $idx = 0;
        //Two loops need to be refactored
        foreach ($this->DataToPopulateSurveysDTO as $surveyRows) {

            $this->QuestionsDTO[$idx] = Questions::create([
                'updated_at' => $this->AvailableSurveysDTO->updated_at,
                'Description' => $surveyRows->QuestionDescription,
                'isAnsweredRepeatedly' => false,
                'survey_lists_id' => $this->SurveyListDTO->id
            ]);
            $this->populateQuestionAnswersWithParticipants($idx, $participants);
            $idx++;
        }

    }

    private function populateQuestionAnswersWithParticipants($questionsDTOIdx, $participants) {

        $idx = 0;
        foreach ($participants as $participant) {
            //FIXME: Participant User ID is hardcoded to 1, and it should be dynamic
            $AnswersDTO[$idx] = Answers::create([
                'updated_at' => $this->AvailableSurveysDTO->updated_at,
                'answerValue' => 'default',
                'question_id' => $this->QuestionsDTO[$questionsDTOIdx]->id,
                'participant_user_id' => 7
            ]);
            $idx++;
        }
    }
}
