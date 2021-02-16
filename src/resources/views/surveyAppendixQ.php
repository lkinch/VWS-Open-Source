<!DOCTYPE html>
<html lang="en">

<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS ORDER MATTERS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dashboard/index.css" />
    <link rel="stylesheet" href="css/dashboard/sidebar.css" />
    <link rel="stylesheet" href="css/dashboard/surveyrightbar.css" />
	<script src="https://kit.fontawesome.com/555936ed9c.js" crossorigin="anonymous"></script>
    <title>Self-Efficacy for Managing Chronic Disease 6-item Scale</title>

</header>

<body>

	<div class="main">
		<!--  from the first element on https://getbootstrap.com/docs/5.0/components/list-group/ -->
		<section class="left-panel">
			<div class="wrapper">
				<h2>VWS</h2>
				<ul class="list-group">
					<li class="list-group-item active" aria-current="true">Dashboard</li>
					<li class="list-group-item">Wellness Activity</li>
					<li class="list-group-item">Survey</li>
					<li class="list-group-item">Forums</li>
					<li class="list-group-item">Messages</li>
				</ul>
				<div class="left-panel-logo">
					<img src="images/example2.png" style="height: 30px; width: 30px;"></img>
				</div>
			</div>
		</section>
		<section class="right-panel" >
			<!--top includes greetings, avatar, user name and drop down list-->
			<!--all followed the mainpage design in first mockup, might change in later-->
			<div class="survey-title">
				<h2>Self-Efficacy for Managing Chronic Disease 6-item Scale</h2>

				<div class="bar-center">
					<h4 class="bar-center-title">John Doe</h4>
					<img class='bar-center-img' alt='Avatar image' src="images/example2.png" style="height: 30px; width: 30px;" ></img>
				</div>

				<div class="dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
						John Doe
					</button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<li><a class="dropdown-item" href="#">Profile</a></li>
						<li><a class="dropdown-item" href="#">Change Password</a></li>
					</ul>
				</div>
			</div>

			<!--Survey form start from here-->
			<!--Should be in the middle of the screen-->
			<!-- this component form comes from https://getbootstrap.com/docs/5.0/forms/overview/ -->
			<div class='survey'>
				<form id='surveyForm'>
					<p>We would like to know how confident you are in doing certain activities. For each of the following questions, please choose the number that corresponds to your confidence that you can do the tasks regularly at the present time. 1 as not at all confident and 10 as total confident.</p>

					<div class="mb-3 question" id='question1'>
						<label for="customRange1" class="form-label">How confident do you feel that you can keep the fatigue caused by your disease from interfering with the things you want to do?</label>
                        <input type="range" class="form-range" min="1" max="10" step="1" id="customRange1" onchange="updateQuestion(0)">
                        <div class="inline" style="display: flex;">
                            <label for="customRange1Output" class="output-label">Current Value: </label>
                            <div class="output" id="customRange1Output"></div>
                        </div>
					</div>

					<div class="mb-3 question" id='question2'>
						<label for="customRange2" class="form-label">How confident do you feel that you can keep the physical discomfort or pain of your disease from interfering with the things you want to do?</label>
                        <input type="range" class="form-range" min="1" max="10" step="1" id="customRange2" onchange="updateQuestion(1)">
                        <div class="inline" style="display: flex;">
                            <label for="customRange1Output" class="output-label">Current Value: </label>
                            <div class="output" id="customRange1Output"></div>
                        </div>
					</div>

					<div class="mb-3 question" id='question3'>
						<label for="customRange3" class="form-label">How confident do you feel that you can keep the emotional distress caused by your disease from interfering with the things you want to do?</label>
                        <input type="range" class="form-range" min="1" max="10" step="1" id="customRange3" onchange="updateQuestion(2)">
                        <div class="inline" style="display: flex;">
                            <label for="customRange1Output" class="output-label">Current Value: </label>
                            <div class="output" id="customRange1Output"></div>
                        </div>
					</div>

					<div class="mb-3 question" id='question4'>
						<label for="customRange4" class="form-label">How confident do you feel that you can keep any other symptoms or health problems you have from interfering with the things you want to do?</label>
                        <input type="range" class="form-range" min="1" max="10" step="1" id="customRange4" onchange="updateQuestion(3)">
                        <div class="inline" style="display: flex;">
                            <label for="customRange1Output" class="output-label">Current Value: </label>
                            <div class="output" id="customRange1Output"></div>
                        </div>
					</div>

					<div class="mb-3 question" id='question5'>
						<label for="customRange5" class="form-label">How confident do you feel that you can the different tasks and activities needed to manage your health condition so as to reduce your need to see a doctor?</label>
                        <input type="range" class="form-range" min="1" max="10" step="1" id="customRange5" onchange="updateQuestion(4)">
                        <div class="inline" style="display: flex;">
                            <label for="customRange1Output" class="output-label">Current Value: </label>
                            <div class="output" id="customRange1Output"></div>
                        </div>
					</div>

					<div class="mb-3 question" id='question6'>
						<label for="customRange6" class="form-label">How confident do you feel that you can do things other than just taking medication to reduce how much your illness affects your everyday life?</label>
                        <input type="range" class="form-range" min="1" max="10" step="1" id="customRange6" onchange="updateQuestion(5)">
                        <div class="inline" style="display: flex;">
                            <label for="customRange1Output" class="output-label">Current Value: </label>
                            <div class="output" id="customRange1Output"></div>
                        </div>
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<br>
			<p>References: Lorig KR, Sobel, DS, Ritter PL, Laurent, D, Hobbs, M. Effect of a self-management program for patients with chronic disease. Effective Clinical Practice, 4, 2001,pp. 256-262.</p>
		</section>
	</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script>

    let getAllQuestions = document.querySelectorAll('.question');

    for (let i = 0; i < getAllQuestions.length; i++) {
        let outputDiv = getAllQuestions[i].querySelector('.output');
        let currentLikertValue = getAllQuestions[i].querySelector('.form-range').value;
        outputDiv.innerText = currentLikertValue;
    }

    function updateQuestion(questionNum) {
        let getAllQuestions = document.querySelectorAll('.question');
        let outputDiv = getAllQuestions[questionNum];
        let inlineElement = outputDiv.querySelector('.output');
        let currentLikertValue = getAllQuestions[questionNum].querySelector('.form-range').value;
        inlineElement.innerText = currentLikertValue;
    }

</script>
</body>

</html>
