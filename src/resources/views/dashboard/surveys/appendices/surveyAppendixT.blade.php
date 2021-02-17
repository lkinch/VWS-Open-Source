@section('surveyAppendixT')
<div class="survey-title">
    <h2>Appendix T: GAD-7 Anxiety</h2>
</div>
			<!--Survey form start from here-->
			<!--Should be in the middle of the screen-->
			<!-- this component form comes from https://getbootstrap.com/docs/5.0/forms/overview/ -->
			<div class='survey'>
					<p>Over the last two weeks, how often have you been bothered by the following problems?</p>

					<div class="mb-3" id='surveyQuestion'>
						<label for="surveyQuestion" class="form-label">Feeling nervous, anxious, or on edge?</label>
						<!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question" id="answer1" checked>
							<label class="form-check-label" for="answer1">
								Not at all
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question" id="answer2">
							<label class="form-check-label" for="answer2">
								Several days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question" id="answer3">
							<label class="form-check-label" for="answer3">
								More than half the days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question" id="answer4">
							<label class="form-check-label" for="answer4">
								Nearly every day
							</label>
						</div>
					</div>

					<div class="mb-3" id='surveyQuestion'>
						<label for="surveyQuestion" class="form-label">Not being able to stop or control worrying?</label>
						<!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question2" id="q2answer1" checked>
							<label class="form-check-label" for="q2answer1">
								Not at all
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question2" id="q2answer2">
							<label class="form-check-label" for="q2answer2">
								Several days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question2" id="q2answer3">
							<label class="form-check-label" for="q2answer3">
								More than half the days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="question2" id="q2answer4">
							<label class="form-check-label" for="q2answer4">
								Nearly every day
							</label>
						</div>
					</div>

					<div class="mb-3" id='surveyQuestion'>
						<label for="surveyQuestion" class="form-label">Worrying too much about different things?</label>
						<!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
							<label class="form-check-label" for="flexRadioDefault2">
								Not at all
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
							<label class="form-check-label" for="flexRadioDefault2">
								Several days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
							<label class="form-check-label" for="flexRadioDefault2">
								More than half the days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
							<label class="form-check-label" for="flexRadioDefault2">
								Nearly every day
							</label>
						</div>
					</div>

					<div class="mb-3" id='surveyQuestion'>
						<label for="surveyQuestion" class="form-label">Trouble relaxing?</label>
						<!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
							<label class="form-check-label" for="flexRadioDefault1">
								Not at all
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
							<label class="form-check-label" for="flexRadioDefault2">
								Several days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
							<label class="form-check-label" for="flexRadioDefault1">
								More than half the days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
							<label class="form-check-label" for="flexRadioDefault2">
								Nearly every day
							</label>
						</div>
					</div>

					<div class="mb-3" id='surveyQuestion'>
						<label for="surveyQuestion" class="form-label">Being so restless that it is hard to sit still?</label>
						<!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
							<label class="form-check-label" for="flexRadioDefault1">
								Not at all
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
							<label class="form-check-label" for="flexRadioDefault2">
								Several days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
							<label class="form-check-label" for="flexRadioDefault1">
								More than half the days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
							<label class="form-check-label" for="flexRadioDefault2">
								Nearly every day
							</label>
						</div>
					</div>

					<div class="mb-3" id='surveyQuestion'>
						<label for="surveyQuestion" class="form-label">Becoming easily annoyed or irritable?</label>
						<!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
							<label class="form-check-label" for="flexRadioDefault1">
								Not at all
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
							<label class="form-check-label" for="flexRadioDefault2">
								Several days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
							<label class="form-check-label" for="flexRadioDefault1">
								More than half the days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
							<label class="form-check-label" for="flexRadioDefault2">
								Nearly every day
							</label>
						</div>
					</div>

					<div class="mb-3" id='surveyQuestion'>
						<label for="surveyQuestion" class="form-label">Feeling afraid, as if something awful might happen?</label>
						<!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
							<label class="form-check-label" for="flexRadioDefault1">
								Not at all
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
							<label class="form-check-label" for="flexRadioDefault2">
								Several days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
							<label class="form-check-label" for="flexRadioDefault1">
								More than half the days
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
							<label class="form-check-label" for="flexRadioDefault2">
								Nearly every day
							</label>
						</div>
					</div>

					<div class="mb-3" id='surveyQuestion'>
						<label for="surveyQuestion" class="form-label">If you checked any problems, how difficult have they made it for you to do your work, take care of things at home, or get along with other people?</label>
						<!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
							<label class="form-check-label" for="flexRadioDefault1">
								Not difficult at all
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
							<label class="form-check-label" for="flexRadioDefault2">
								Somewhat difficult
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
							<label class="form-check-label" for="flexRadioDefault1">
								Very difficult
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
							<label class="form-check-label" for="flexRadioDefault2">
								Extremely difficult
							</label>
						</div>
					</div>
			</div>
			<br>
			<p>Source: Primary Care Evaluation of Mental Disorders Patient Health Questionnaire (PRIME-MD-PHQ). The PHQ was developed by Drs. Robert L. Spitzer, Janet B.W. Williams, Kurt Kroenke, and colleagues. For research information, contact Dr. Spitzer at ris8@columbia.edu. PRIME-MD® is a trademark of Pfizer Inc. Copyright© 1999 Pfizer Inc. All rights reserved. Reproduced with permission</p>
	</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
@endsection('surveyAppendixT')
