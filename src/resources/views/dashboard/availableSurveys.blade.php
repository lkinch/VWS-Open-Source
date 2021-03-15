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
    <title>Available Surveys</title>

</head>

<body>
    <div class="main">
        @section('leftsidebar')
            @include('dashboard.leftsidebar')
        @show

        <section class="right-panel" >
        <h1>Good Morning</h1>
        <br>
        <p>Here are a list of Surveys available</p>
        
        <div class="complete">
            <h2>Completed Surveys</h2>
            <div class="completeRow">
            
            </div>
        </div>

        <div class="incomplete">
            <h2>Not Completed Surveys</h2>
            <div class="incompleteRow">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Appendix O</h5>
                            <p class="card-text">Click the button below to start the Appendix O Survey</p>
                            <a href="AppendixO" class="btn btn-primary">Start Survey</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Appendix Q</h5>
                            <p class="card-text">Click the button below to start the Appendix Q Survey</p>
                            <a href="AppendixQ" class="btn btn-primary">Start Survey</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Appendix R</h5>
                            <p class="card-text">Click the button below to start the Appendix R Survey</p>
                            <a href="AppendixR" class="btn btn-primary">Start Survey</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Appendix S</h5>
                            <p class="card-text">Click the button below to start the Appendix S Survey</p>
                            <a href="AppendixS" class="btn btn-primary">Start Survey</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Appendix T</h5>
                            <p class="card-text">Click the button below to start the Appendix T Survey</p>
                            <a href="AppendixT" class="btn btn-primary">Start Survey</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Social Eating</h5>
                            <p class="card-text">Click the button below to start the Social Eating Survey</p>
                            <a href="SocialEating" class="btn btn-primary">Start Survey</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Social Workout</h5>
                            <p class="card-text">Click the button below to start the Social Workout Survey</p>
                            <a href="SocialWorkout" class="btn btn-primary">Start Survey</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Health Questionnaire</h5>
                            <p class="card-text">Click the button below to start the Health Questionnaire Survey</p>
                            <a href="SurveyHealth" class="btn btn-primary">Start Survey</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </div>
</body>

</html>
