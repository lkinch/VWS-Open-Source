<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS ORDER MATTERS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/dashboard/index.css" />
    <link rel="stylesheet" href="/css/dashboard/sidebar.css" />
	<link rel="stylesheet" href="/css/dashboard/surveyrightbar.css" />

	<script src="https://kit.fontawesome.com/555936ed9c.js" crossorigin="anonymous"></script>
    <title>Survey Navigation</title>

</head>

<body>
    <div class="main">
        @section('leftsidebar')
            @include('dashboard.leftsidebar')
        @show

        <section class="right-panel" >
            <h1>Surveys</h1>
            <br>
            <p>At the VWS, we offer a number of surveys that track your health in a variety of ways.</p>
            <br>
            <p>If you were assigned to fill out a certain survey, check below for the name of the survey, then click on the link.</p>
            <div class="surveyselection">
                <p><a href="AppendixO" class="text-primary">AppendixO</a></p>
                <p><a href="AppendixQ" class="text-primary">AppendixQ</a></p>
                <p><a href="AppendixR" class="text-primary">AppendixR</a></p>
                <p><a href="AppendixS" class="text-primary">AppendixS</a></p>
                <p><a href="AppendixT" class="text-primary">AppendixT</a></p>
                <p><a href="SocialEating" class="text-primary">SocialEating</a></p>
                <p><a href="SurveyHealth" class="text-primary">SurveyHealth</a></p>
                <p><a href="SurveyWorkout" class="text-primary">SurveyWorkout</a></p>
            </div>
        </section>
    </div>
</body>

</html>