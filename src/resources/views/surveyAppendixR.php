<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS ORDER MATTERS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" />
	<script src="https://kit.fontawesome.com/555936ed9c.js" crossorigin="anonymous"></script>
    <title>Survey form page R</title>

</head>

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
				<h2>Survey form name</h2>
				
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
					<p>During the past 6 months, how many times have you</p>
					<div class="mb-3">
						<label for="physicianFequency" class="form-label">Whent to see your family physician?</label>
						<input type="text" class="form-control" id="inputphysician" aria-describedby="physicianFequency">
					</div>

					<div class="mb-3">
						<label for="specialist" class="form-label">When to see a specialist</label>
						<input type="text" class="form-control" id="inputspecialist" aria-describedby="specialist">
					</div>

					<div class="mb-3">
						<label for="healthcare" class="form-label">Went to see another healthcare provider</label>
						<input type="text" class="form-control" id="inputHealthcare" aria-describedby="healthcare">
					</div>

					<div class="form-group">
						<label for="otherHealthcare">Please list the other healthcare providers that you have seen：</label>
						<textarea class="form-control" rows="5" id="otherHealthcare"></textarea>
					</div>

					<div class="mb-3" id='walkIn'>
						<label for="walkIn" class="form-label">Went to a walk in clinic?</label>
						<!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
							<label class="form-check-label" for="flexRadioDefault1">
								Yes
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
							<label class="form-check-label" for="flexRadioDefault2">
								No
							</label>
						</div>
					</div>

					<div class="mb-3">
						<label for="walkInTimes" class="form-label">If yes, how many times?</label>
						<input type="text" class="form-control" id="walkInTimes" aria-describedby="walkInTimes">
					</div>

					<div class="mb-3" id='emergencyRoom'>
						<label for="emergencyRoom" class="form-label">Went to the emergency room?</label>
						<!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
							<label class="form-check-label" for="flexRadioDefault1">
								Yes
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
							<label class="form-check-label" for="flexRadioDefault2">
								No
							</label>
						</div>
					</div>

					<div class="mb-3">
						<label for="emergencyRoomTimes" class="form-label">If yes, how many times?</label>
						<input type="text" class="form-control" id="emergencyRoomTimes" aria-describedby="emergencyRoomTimes">
					</div>

					<div class="mb-3" id='hospital'>
						<label for="hospital" class="form-label">Were admitted to the hospital? </label>
						<!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
							<label class="form-check-label" for="flexRadioDefault1">
								Yes
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
							<label class="form-check-label" for="flexRadioDefault2">
								No
							</label>
						</div>
					</div>

					<div class="mb-3">
						<label for="hospitalTimes" class="form-label">If yes, how many times?</label>
						<input type="text" class="form-control" id="hospitalTimes" aria-describedby="hospitalTimes">
					</div>

					<div class="mb-3" id='nightHospital'>
						<label for="nightHospital" class="form-label">Spent the night in the hospital?</label>
						<!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
							<label class="form-check-label" for="flexRadioDefault1">
								Yes
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
							<label class="form-check-label" for="flexRadioDefault2">
								No
							</label>
						</div>
					</div>

					<div class="mb-3">
						<label for="nightHospitalTimes" class="form-label">If yes, how many nights?</label>
						<input type="text" class="form-control" id="nightHospitalTimes" aria-describedby="nightHospitalTimes">
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</section>
	</div>
	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>
