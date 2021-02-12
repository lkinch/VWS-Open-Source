@section('appendixR')
<section class="right-panel" >
    <!--top includes greetings, avatar, user name and drop down list-->
    <!--all followed the mainpage design in first mockup, might change in later-->
    <div class="survey-title">
        <h2>Appendix R</h2>
    </div>

    <!--Survey form start from here-->
    <!--Should be in the middle of the screen-->
    <!-- this component form comes from https://getbootstrap.com/docs/5.0/forms/overview/ -->
    <div class='survey'>
        <form id='surveyForm'>
            <p>During the past 6 months, how many times have you</p>
            <div class="mb-3">
                <label for="physicianFequency" class="form-label">Went to see your family physician?</label>
                <input type="text" class="form-control" id="inputphysician" aria-describedby="physicianFequency">
            </div>

            <div class="mb-3">
                <label for="specialist" class="form-label">Went to see a specialist</label>
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
@endsection('appendixR')
