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
    <title>About VWS</title>

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
                    <input type="text"
                    name="programstartdate" id="programstartdate"
                    class="form-control" value="01/01/2021" placeholder="DD/MM/YYYY" aria-label="Study date first delivery">
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
                <div class="input-group mb-3">
                    <input type="text"
                    name="participantOne" id="participantOne"
                    class="form-control" value="tim" placeholder="Username of Participant" aria-label="Example text with button addon" aria-describedby="button-addon1">
                </div>

                <div class="input-group mb-3">
                    <input type="text"
                    name="participantTwo" id="participantTwo"
                    class="form-control" value="john" placeholder="Username of Participant" aria-label="Example text with button addon" aria-describedby="button-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="text"
                    name="participantThree" id="participantThree"
                    class="form-control" value="dave" placeholder="Username of Participant" aria-label="Example text with button addon" aria-describedby="button-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="text"
                    name="participantFour" id="participantFour"
                    class="form-control" value="ferris" placeholder="Username of Participant" aria-label="Example text with button addon" aria-describedby="button-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="text"
                    name="participantFive" id="participantFive"
                    class="form-control" value="spencer" placeholder="Username of Participant" aria-label="Example text with button addon" aria-describedby="button-addon1">
                </div>

                <h2>List the Questions & Answers for the Study</h2>
                <div class="input-group mb-3">
                    <input
                    name="questionOne" id="questionOne"
                    value="How confident do you feel that you can keep the fatigue caused by your disease from interfering with the things you want to do?"
                    type="text" class="form-control" placeholder="Question Description" aria-label="question description">
                    <input type="text"
                    name="questionOneLikert" id="questionOneLikert"
                    class="form-control" value="5" placeholder="Highest Likert Number" aria-label="highest likert number">
                </div>
                <div class="input-group mb-3">
                    <input
                    name="questionTwo" id="questionTwo"
                    value="How confident do you feel that you can keep the physical discomfort or pain of your disease from interfering with the things you want to do?"
                    type="text" class="form-control" placeholder="Question Description" aria-label="question description">
                    <input type="text"
                    name="questionTwoLikert" id="questionTwoLikert" class="form-control" value="5" placeholder="Highest Likert Number" aria-label="highest likert number">
                </div>
                <div class="input-group mb-3">
                    <input
                    name="questionThree" id="questionThree"
                    value="How confident do you feel that you can keep the emotional distress caused by your disease from interfering with the things you want to do?"
                    type="text" class="form-control" placeholder="Question Description" aria-label="question description">
                    <input type="text"
                    name="questionThreeLikert" id="questionThreeLikert" class="form-control" value="5" placeholder="Highest Likert Number" aria-label="highest likert number">
                </div>
                <div class="input-group mb-3">
                    <input
                    name="questionFour" id="questionFour"
                    value="How confident do you feel that you can keep any other symptoms or health problems you have from interfering with the things you want to do?"
                    type="text" class="form-control" placeholder="Question Description" aria-label="question description">
                    <input type="text"
                    name="questionFourLikert" id="questionFourLikert" class="form-control" value="5" placeholder="Highest Likert Number" aria-label="highest likert number">
                </div>
                <div class="input-group mb-3">
                    <input
                    name="questionFive" id="questionFive"
                    value="How confident do you feel that you can the different tasks and activities needed to manage your health condition so as to reduce your need to see a doctor?"
                    type="text" class="form-control" placeholder="Question Description" aria-label="question description">
                    <input type="text"
                    name="questionFiveLikert" id="questionFiveLikert" class="form-control" value="5" placeholder="Highest Likert Number" aria-label="highest likert number">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
		</section>
    </div>
</body>

</html>
