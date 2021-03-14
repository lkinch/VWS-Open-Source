
@section('surveyAppendixS')
<!--not sure which action to use-->
<form id='surveyForm' action="surveyAppendixS" method="post">
    <!-- THIS IS ASKED PERIODICALLY -->
	<div class="survey-title">
        <h2>Appendix S: Work Productivity And Activity Impairment Questionnaire General Health (WPAI-GH)</h2>
    </div>

	<div class='survey'>
		<input type="hidden" name="userId" placeholder="{{$data['id']}}">
		<div class="mb-3" id='surveyQuestion'>
            <label for="surveyQuestion" class="form-label">{{ $questions[1] }}</label>
            <div class="form-check">
                <input class="form-check-input" onclick="becomeAvailable();" type="radio" name="questionOne" id="questionOneAnswer1" checked>
                <label class="form-check-label" for="questionOneAnswer1">
                	Yes
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" onclick="becomeReadOnly();"type="radio" name="questionOne" id="questionOneAnswer2">
                <label class="form-check-label" for="questionOneAnswer2">
                	No
                </label>
            </div>
        </div>

		<div class="mb-3"id='surveyQuestion'>
            <label for="surveyQuestion" class="form-label">{{ $questions[2] }}</label>
            <input type="text" class="form-control" id="questionTwo" placeholder="(Hours)" aria-describedby="questionTwo">
        </div>

		<div class="mb-3"id='surveyQuestion'>
            <label for="surveyQuestion" class="form-label">{{ $questions[3] }}</label>
            <input type="text" class="form-control" id="questionThree" placeholder="(Hours)" aria-describedby="questionThree">
        </div>

		<div class="mb-3" id='surveyQuestion'>
            <label for="surveyQuestion" class="form-label">{{ $questions[4] }}</label>
            <input type="text" class="form-control" id="questionFour" placeholder="(Hours)" aria-describedby="questionFour">
        </div>

		<div class="mb-3"id='surveyQuestion'>
            <label for="surveyQuestion" class="form-label">{{ $questions[5] }}</label>
            <input type="text" class="form-control" id="questionFive" placeholder="(0-10)" aria-describedby="questionFive">
        </div>

		<div class="mb-3"id='surveyQuestion'>
            <label for="surveyQuestion" class="form-label">{{ $questions[6] }}</label>
            <input type="text" class="form-control" id="questionSix" placeholder="(0-10)" aria-describedby="questionSix">
        </div>
	</div>

	<script>
		function becomeReadOnly(){
			document.getElementById("questionTwo").readOnly = true;
			document.getElementById("questionThree").readOnly = true;
			document.getElementById("questionFour").readOnly = true;
			document.getElementById("questionFive").readOnly = true;
		}

		function becomeAvailable(){
			document.getElementById("questionTwo").readOnly = false;
			document.getElementById("questionThree").readOnly = false;
			document.getElementById("questionFour").readOnly = false;
			document.getElementById("questionFive").readOnly = false;
		}

		function becomeReadOnlyQ4(){
			document.getElementById("questionFour").readOnly = true;
			document.getElementById("questionFive").readOnly = true;
			document.getElementById("questionFourHour").readOnly = true;
		}

		function becomeAvailableQ4(){
			document.getElementById("questionFour").readOnly = false;
			document.getElementById("questionFive").readOnly = false;
			document.getElementById("questionFourHour").readOnly = false;
		}
	</script>
	<button type="submit" class="btn btn-primary" style="width: 150px;">Submit</button>
</form>
@endsection('surveyAppendixS')
