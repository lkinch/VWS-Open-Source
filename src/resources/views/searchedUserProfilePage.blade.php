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
    <title>Search</title>

</head>

<body>


    <div class="main">
        @section('leftsidebar')
            @include('dashboard.leftsidebar')
        @show

        <section class="right-panel" >
            <h1>Good Morning Researcher,</h1>
            <br>
            <div class="card">
                <div class="card-body">
                    <!--update the link for generate survey and generate report-->
                    <h5 class="card-title">{{$data['name']}}</h5>
                    <a href="#" class="card-link">Generate Survey</a>
                    <a href="#" class="card-link">Generate Report</a>
                </div>
            </div>

            <div class="container">
                <div class="row"><!--make sure these two columns are in same row-->
                    <div class="col-sm-4"><!--define the size of columns-->
                    <div class="card"><!--create card inside column-->
                        <div class="card-body">
                            <h5 class="card-title">Completed Surveys</h5>
                            <!--List all completed surveys with completed date using table-->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Survey Name</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    @foreach ($survey_data as $user)
                                        <p>This is user {{ $user->id }}</p>
                                    @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                    
                    <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Not Completed Surveys</h5>
                            <!--List all uncompleted surveys with assigned date using table-->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Survey Name</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    
</body>

</html>
