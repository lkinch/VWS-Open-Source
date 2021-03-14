<?php

namespace App\Http\Controllers\Surveys;

use App\Models\AppendixO;
use App\Models\DataToPopulateSurvey;
use App\Models\AvailableSurveys;
use App\Models\SurveyUserList;
use App\Models\SurveyList;
use App\Models\Questions;
use App\Models\Answers;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        return view('dashboard/sampleSurvey');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'inputAge' => 'required|max:255',
            'gender' => 'required|in:male,female',
            'inputHeight' => 'required|max:255',
            'inputWeight' => 'required|max:255',
            'inputOccupation' => 'required|max:255',
            'inputEmployment' => 'required|max:255',
            'chronic' => 'required|max:255'
        ]);

         AppendixO::create([
            'age' => $request->inputAge,
            'gender' => $request->gender,
            'height' => $request->inputHeight,
            'weight' => $request->inputWeight,
            'occupation' => $request->inputOccupation,
            'employment' => $request->inputEmployment,
            'chronic_conditions' => $request->chronic,
        ]);

        return redirect()->route('dashboard');
    }
    public function researchSurvey()
    {
        return view("dashboard.researchSurvey");
    }

    public function showDistributeSurvey() {
        return view('dashboard/distributeSurvey');
    }

    public function DistributeSurveyStore(Request $request) {

        $request = $this->validateSurveyStore($request);

        $addAvailableSurveys = $this->addAvailableSurveys($request);

        $addPopulateSurveyRows = $this->addPopulateToDataSurveys($request, $addAvailableSurveys);

        $addSurveyUserList = $this->addSurveyUserList($addAvailableSurveys, $addPopulateSurveyRows);

        $this->populateParticipantsWithSurveysToFillOut($request, $addAvailableSurveys, $addPopulateSurveyRows, $addSurveyUserList);

        return redirect()->route('dashboard');
    }

    //TODO: Should be its own class from validateSurveyStore -> $addSurveyUserList
    private function validateSurveyStore($request) {

        $this->validate($request, [
            'surveyName' => 'required|max:255',
            'deliveryfrequency' => 'required|max:255',
            'programstartdate' => 'required|date',
            'chooseSurvey' => 'required|max:255',
            'participantOne' => 'required|max:255',
            'participantTwo' => 'required|max:255',
            'participantThree' => 'required|max:255',
            'participantFour' => 'required|max:255',
            'participantFive' => 'required|max:255',
            'questionOne' => 'required|max:255',
            'questionTwo' => 'required|max:255',
            'questionThree' => 'required|max:255',
            'questionFour' => 'required|max:255',
            'questionFive' => 'required|max:255',
            'questionOneLikert' => 'required|max:255',
            'questionTwoLikert' => 'required|max:255',
            'questionThreeLikert' => 'required|max:255',
            'questionFourLikert' => 'required|max:255',
            'questionFiveLikert' => 'required|max:255'
        ]);

        return $request;
    }

    private function addAvailableSurveys($request) {

        $addAvailableSurveys = AvailableSurveys::create([
            'updated_at' => date('Y-m-d H:i:s') . '',
            'SurveyName' => $request->surveyName,
            'DeliveryFreq' => $request->deliveryfrequency,
            'ProgramStartDate' => $request->programstartdate
        ]);

        return $addAvailableSurveys;
    }

    private function addPopulateToDataSurveys($request, $addAvailableSurveys) {

        $questionDescriptions = [$request->questionOne, $request->questionTwo, $request->questionThree,
            $request->questionFour, $request->questionFive];

        $answerDescriptions = [$request->questionOneLikert, $request->questionTwoLikert, $request->questionThreeLikert,
            $request->questionFourLikert, $request->questionFiveLikert];

        for ($i = 0; $i < 5; $i++) {
            $populateSurveyRows[$i] = DataToPopulateSurvey::create([
                'updated_at' => $addAvailableSurveys->updated_at,
                'QuestionNum' => $i + 1,
                'QuestionDescription' => $questionDescriptions[$i],
                'AnswerNum' => 1,
                'AnswerDescription' => 'Likert ' . $answerDescriptions[$i],
                'survey_id' => $addAvailableSurveys->id
            ]);
        }

        return $populateSurveyRows;
    }

    private function addSurveyUserList($addAvailableSurveys, $populateSurveyRows) {

        $addPopulateNewSurvey = SurveyUserList::create([
            'updated_at' => date('Y-m-d H:i:s') . '',
            'isCompleted' => false,
            'user_id' => Auth::id(),
            'survey_id' => $addAvailableSurveys->id,
            'ProgramStartDate' => $addAvailableSurveys->ProgramStartDate
        ]);

        return $addPopulateNewSurvey;

    }

    // TODO: Needs to be a seperate Class
    private function populateParticipantsWithSurveysToFillOut($request, $addAvailableSurveys, $addPopulateSurveyRows, $addSurveyUserList) {

        $addSurveyList = SurveyList::create([
            'SurveyName' => $request->surveyName,
            'created_at' => $addAvailableSurveys->created_at,
            'DeliveryDate' => $request->programstartdate, // FIXME: This only works for the first program, should be calculated
        ]);

        $participants = [$request->participantOne,
            $request->participantTwo,
            $request->participantThree,
            $request->participantFour,
            $request->participantFive
        ];

        //Two loops need to be refactored
        foreach ($addPopulateSurveyRows as $surveyRows) {
            $this->populateQuestionAnswersWithParticipants($participants, $addAvailableSurveys, $surveyRows, $addSurveyList);
        }

    }

    private function populateQuestionAnswersWithParticipants($participants, $addAvailableSurveys, $surveyRows, $addSurveyList) {

        $addQuestions = Questions::create([
            'updated_at' => $addAvailableSurveys->updated_at,
            'Description' => $surveyRows->QuestionDescription,
            'isAnsweredRepeatedly' => false,
            'survey_lists_id' => $addSurveyList->id
        ]);

        foreach ($participants as $participant) {
            //FIXME: Participant User ID is hardcoded to 1, and it should be dynamic
            $addAnswers = Answers::create([
                'updated_at' => $addAvailableSurveys->updated_at,
                'answerValue' => 'default',
                'question_id' => $addQuestions->id,
                'participant_user_id' => 1
            ]);
        }
    }

}
