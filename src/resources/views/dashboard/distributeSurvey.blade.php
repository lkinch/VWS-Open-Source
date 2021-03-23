<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS ORDER MATTERS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/dashboard/index.css" />
    <link rel="stylesheet" href="/css/dashboard/sidebar.css" />
	<link rel="stylesheet" href="/css/dashboard/mainrightbar.css" />

	<script src="https://kit.fontawesome.com/555936ed9c.js" crossorigin="anonymous"></script>
    <title>Distribute Survey</title>

</head>

<body>
    <div class="main">
        @section('leftsidebar')
            @include('dashboard.leftsidebar')
        @show

		<section class="right-panel" >
            <form id="distributeForm" action="{{ route('DistributeSurveyStore') }}" method="post">
                @csrf

                <div class="input-group mb-3">
                    <input type="text"
                    name="surveyName" id="surveyName"
                    class="form-control" value="My First Distribution of Survey" placeholder="Study Distribution Name" aria-label="Study distribution name">
                </div>

                <div class="input-group mb-3">
                    <label for="deliveryfrequency" class="form-label">How frequently should this survey be sent. </label><br>
                    <input type="text"
                    name="deliveryfrequency" id="deliveryfrequency"
                    class="form-control" value="Quarterly" placeholder="Quarterly" aria-label="Study delivery frequency">
                </div>

                <div class="input-group mb-3">
                    <label for="programstartdate" class="form-label">Program start date: </label><br>
                    <input type="date"
                    name="programstartdate" id="programstartdate"
                    class="form-control" aria-label="Study date first delivery">
                </div>

                <label for="survey-send-out" class="form-label">Please choose a survey to send out to participants</label>
                <select class="form-select form-select-lg mb-3" name="chooseSurvey" id="surveysendout" aria-label=".form-select-lg example">
                    <option selected>Choose Survey</option>
                    <option value="AppendixO">Appendix O</option>
                    <option value="AppendixQ">Appendix Q</option>
                    <option value="AppendixR">Appendix R</option>
                    <option value="AppendixS">Appendix S</option>
                    <option value="AppendixT">Appendix T</option>
                    <option value="SocialEating">Social Eating</option>
                    <option value="SurveyHealth">Survey Health</option>
                    <option value="SurveyWorkout">Survey Workout</option>
                </select>

                <h2>List the Participants of the Study</h2>
                <form id="participantForm">
                <div class="input-group mb-3">
                    <select class="form-select" name="participantOne" id="participantOne" placeholder="Username of Participant" >
                        <option selected>Select Participant</option>
                        @foreach ($participants as $participant)
                            <option value="{{$participant['id']}}">{{ $participant["name"] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group mb-3">
                    <select class="form-select" name="participantTwo" id="participantTwo" placeholder="Username of Participant" >
                        <option selected>Select Participant</option>
                        @foreach ($participants as $participant)
                            <option value="{{$participant['id']}}">{{ $participant["name"] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-3">
                    <select class="form-select" name="participantThree" id="participantThree" placeholder="Username of Participant" >
                        <option selected>Select Participant</option>
                        @foreach ($participants as $participant)
                            <option value="{{$participant['id']}}">{{ $participant["name"] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-3">
                    <select class="form-select" name="participantFour" id="participantFour" placeholder="Username of Participant" >
                        <option selected>Select Participant</option>
                        @foreach ($participants as $participant)
                            <option value="{{$participant['id']}}">{{ $participant["name"] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-3">
                    <select class="form-select" name="participantFive" id="participantFive" placeholder="Username of Participant" >
                        <option selected>Select Participant</option>
                        @foreach ($participants as $participant)
                            <option value="{{$participant['id']}}">{{ $participant["name"] }}</option>
                        @endforeach
                    </select>
                </div>
                </form>
                <!--A button that use to add participant dynamically-->
                <button type='button' value='add' class="btn btn-primary" onclick="javascript:add_field();">Add another participant</button>

                <h2>List the Questions & Answers for the Study</h2>
                <div class="input-group mb-3">
                    <input
                    name="questionOne" id="questionOne"
                    value="1) Little interest or pleasure in doing things"
                    type="text" class="form-control" placeholder="Question Description" aria-label="question description">
                    <input type="text"
                    name="questionOneLikert" id="questionOneLikert"
                    class="form-control" value="4" placeholder="Highest Likert Number" aria-label="highest likert number">
                </div>
                <div class="input-group mb-3">
                    <input
                    name="questionTwo" id="questionTwo"
                    value="2) Feeling down, depressed, or hopeless"
                    type="text" class="form-control" placeholder="Question Description" aria-label="question description">
                    <input type="text"
                    name="questionTwoLikert" id="questionTwoLikert" class="form-control" value="4" placeholder="Highest Likert Number" aria-label="highest likert number">
                </div>
                <div class="input-group mb-3">
                    <input
                    name="questionThree" id="questionThree"
                    value="3) Trouble falling or staying asleep, or sleeping too much"
                    type="text" class="form-control" placeholder="Question Description" aria-label="question description">
                    <input type="text"
                    name="questionThreeLikert" id="questionThreeLikert" class="form-control" value="4" placeholder="Highest Likert Number" aria-label="highest likert number">
                </div>
                <div class="input-group mb-3">
                    <input
                    name="questionFour" id="questionFour"
                    value="4) Feeling tired or having little energy"
                    type="text" class="form-control" placeholder="Question Description" aria-label="question description">
                    <input type="text"
                    name="questionFourLikert" id="questionFourLikert" class="form-control" value="4" placeholder="Highest Likert Number" aria-label="highest likert number">
                </div>
                <div class="input-group mb-3">
                    <input
                    name="questionFive" id="questionFive"
                    value="5) Poor appetite or overeating"
                    type="text" class="form-control" placeholder="Question Description" aria-label="question description">
                    <input type="text"
                    name="questionFiveLikert" id="questionFiveLikert" class="form-control" value="4" placeholder="Highest Likert Number" aria-label="highest likert number">
                </div>
                <div class="input-group mb-3">
                    <input
                    name="questionSix" id="questionSix"
                    value="6) Feeling bad about yourself – or that you are a failure or have let yourself or your family down"
                    type="text" class="form-control" placeholder="Question Description" aria-label="question description">
                    <input type="text"
                    name="questionSixLikert" id="questionSixLikert" class="form-control" value="4" placeholder="Highest Likert Number" aria-label="highest likert number">
                </div>
                <div class="input-group mb-3">
                    <input
                    name="questionSeven" id="questionSeven"
                    value="7) Trouble concentrating on things, such as reading the newspaper or watching television"
                    type="text" class="form-control" placeholder="Question Description" aria-label="question description">
                    <input type="text"
                    name="questionSevenLikert" id="questionSevenLikert" class="form-control" value="4" placeholder="Highest Likert Number" aria-label="highest likert number">
                </div>
                <div class="input-group mb-3">
                    <input
                    name="questionEight" id="questionEight"
                    value="8) Moving or speaking so slowly that other people could have noticed? Or the opposite – being so fidgety or restless that you have been moving around a lot more than usual"
                    type="text" class="form-control" placeholder="Question Description" aria-label="question description">
                    <input type="text"
                    name="questionEightLikert" id="questionEightLikert" class="form-control" value="4" placeholder="Highest Likert Number" aria-label="highest likert number">
                </div>
                <div class="input-group mb-3">
                    <input
                    name="questionNine" id="questionNine"
                    value="9) Thoughts that you would be better off dead or of hurting yourself in some way"
                    type="text" class="form-control" placeholder="Question Description" aria-label="question description">
                    <input type="text"
                    name="questionNineLikert" id="questionNineLikert" class="form-control" value="4" placeholder="Highest Likert Number" aria-label="highest likert number">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
		</section>
    </div>

    <script>
        document.getElementById('programstartdate').valueAsDate = new Date(); //this sets program start to default date
        //reqs_id use to keep track the number of participants
        var reqs_id = 5;

        function removeElement(ev) {
            var button = ev.target;
            var field = button.previousSibling;
            var div = button.parentElement;
            div.removeChild(button);
            div.removeChild(field);
        }

        function add_field() {
            reqs_id++; // increment reqs_id to get a unique ID for the new element

            //create text
            var input = document.createElement('input');
            input.type = "text";
            input.setAttribute("class", "form-control");
            input.setAttribute('id', 'participant' + reqs_id);
            input.setAttribute('value', reqs_id);
            input.setAttribute('placeholder', "Username of Participant");
            input.setAttribute('aria-label', "Example text with button addon");
            input.setAttribute('aria-describedby', "button-addon1");
            var reqs = document.getElementById("reqs");
            //create remove button
            var remove = document.createElement('button');
            remove.setAttribute('id', 'participant' + reqs_id);
            remove.onclick = function(e) {
                removeElement(e)
            };
            remove.setAttribute("type", "button");
            remove.innerHTML = "Remove" + reqs_id;
            //append elements
            reqs.appendChild(input);
            reqs.appendChild(remove);
        }
    </script>
</body>

</html>
