@section('surveyAppendixO')
    <!--top includes greetings, avatar, user name and drop down list-->
    <!--all followed the mainpage design in first mockup, might change in later-->
    <div class="survey-title">
        <h2>Appendix O: Demographic Survey</h2>
    </div>

    <!--Survey form start from here-->
    <!--Should be in the middle of the screen-->
    <!-- this component form comes from https://getbootstrap.com/docs/5.0/forms/overview/ -->
    <div class='survey'>
            @csrf
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="text" class="form-control" id="inputAge" aria-describedby="Age">
            </div>
            <div class="mb-3" id='gender'>
                <label for="gender" class="form-label">Gender</label>
                <!-- this comes from https://getbootstrap.com/docs/5.0/forms/checks-radios/ -->
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        female
                    </label>
                </div>
            </div>

            <div class="mb-3">
                <label for="height" class="form-label">Height</label>
                <input type="text" class="form-control" id="inputHeight" aria-describedby="Height">
            </div>

            <div class="mb-3">
                <label for="weight" class="form-label">Weight</label>
                <input type="text" class="form-control" id="inputWeight" aria-describedby="weight">
            </div>

            <div class="mb-3">
                <label for="occupation" class="form-label">Occupation</label>
                <input type="text" class="form-control" id="inpuOccupation" aria-describedby="occupation">
            </div>

            <div class="mb-3">
                <label for="workSituation" class="form-label">Full time or part time employment</label>
                <input type="text" class="form-control" id="inputworkSituation" aria-describedby="workSituation">
            </div>

            <div class="form-group">
                <label for="chronic">Chronic conditions:</label>
                <textarea class="form-control" rows="5" id="chronic"></textarea>
            </div>

    </div>
@endsection('surveyAppendixO')
