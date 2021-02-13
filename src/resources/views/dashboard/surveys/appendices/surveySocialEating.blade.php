@section('surveySocialEating')
    <!--top includes greetings, avatar, user name and drop down list-->
    <!--all followed the mainpage design in first mockup, might change in later-->
    <div class="survey-title">
        <h2>SOCIAL SUPPORT AND EATING HABITS SURVEY</h2>
    </div>

    <!--Survey form start from here-->
    <!--Should be in the middle of the screen-->
    <!-- this component form comes from https://getbootstrap.com/docs/5.0/forms/overview/ -->
    <div class='survey'>
            @csrf
            <p>During the past three months, my family (or members of my household) or friends:</p>
            <div class="mb-3">
                <p>1) Encouraged me not to eat "unhealty foods" (cake, salted chips) when I'm tempted to do so.</p>
                <label for="family" class="form-label">Family: </label>
                <input type="text" class="form-control" id="inputFamilyRate" aria-describedby="Family:">
                <label for="friends" class="form-label">Friends: </label>
                <input type="text" class="form-control" id="inputFriendsRate" aria-describedby="Friends:">
            </div>
            <div class="mb-3">
                <p>2) Discussed my eating habit/changes with me (asked me how I'm doing with my eating changes)</p>
                <label for="family" class="form-label">Family: </label>
                <input type="text" class="form-control" id="inputFamilyRate" aria-describedby="Family:">
                <label for="friends" class="form-label">Friends: </label>
                <input type="text" class="form-control" id="inputFriendsRate" aria-describedby="Friends:">
            </div>
    </div>
@endsection('surveySocialEating')
