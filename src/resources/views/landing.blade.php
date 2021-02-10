<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS ORDER MATTERS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}" />
    <title>Landing page</title>

</head>

<body>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <div>
            <a class="navbar-brand" href="#">Virtual Wellness</a>
        </div>
        <div class="nav-links">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
            <a class="nav-link" href="/about">About</a>
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </div>
    </nav>
	<main>

		<div class="landing-text">
			<h1>Virtual Wellness System</h1>
			<br>
			<h5>The landing page</h5>
			<br>
			<!--login and register buttom here, change link when these pages done-->


            @if (Route::has('login'))
                  @auth
                    <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                    @csrf
                        <button type="submit" class="btn btn-primary mb-3">Logout</button>
                    </form>
                  @else
                    <div id="sign-in-or-register" style="display: flex; flex-direction: column; align-items: center;">
                        <div id="login">
                            @section('login')
                                @include('auth.login')
                            @show
                        </div>

                        <div id="register" style="display: none;">
                            @section('register')
                                @include('auth.register')
                            @show
                        </div>
                        <nav aria-label="...">
                            <ul class="pagination pagination-lg">
                                <li class="page-item active" aria-current="page">
                                    <button class="page-link" onClick="displaySignIn()">Login</button>
                                </li>
                                <li class="page-item">
                                    <button class="page-link" onClick="displayRegister()">Register</button>
                                </li>
                            </ul>
                        </nav>
                    </div>

                  @endauth
            @endif
		</div>

	<div class="padding">
		<div class="container">
			<div class="row">
				<!-- used 6 sm column in bootstrap to make sure have row will be img and another half will be text-->
				<div class="col-sm-6">
					<!-- First column. use some screen shot that match with discription-->
					<!--images/example1.jpg is just an example/place holder-->
					<img src="images/example2.png">
				</div>
				<div class="col-sm-6 text-center">
					<!--second column-->
					<h2>What can VWS do.</h2>
					<p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem placeat quam nostrum itaque ut cum quasi at nam quas repellat, earum rem consectetur architecto sed iure, obcaecati ab veniam, laudantium illo. Autem ullam similique praesentium fuga sed quae cupiditate, minima corporis molestias quam, labore soluta et error veniam nihil tempore a officia laudantium minus voluptatibus aut, consequuntur sunt quis! Quae numquam sit possimus aperiam.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="padding">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-center">
					<!--First column-->
					<h2>How does VWS works.</h2>
					<p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem placeat quam nostrum itaque ut cum quasi at nam quas repellat, earum rem consectetur architecto sed iure, obcaecati ab veniam, laudantium illo. Autem ullam similique praesentium fuga sed quae cupiditate, minima corporis molestias quam, labore soluta et error veniam nihil tempore a officia laudantium minus voluptatibus aut, consequuntur sunt quis! Quae numquam sit possimus aperiam.</p>
				</div>

				<div class="col-sm-6">
					<!-- Second column. use some screen shot that match with discription-->
					<!--images/example1.jpg is just an example/place holder-->
					<img src="images/example2.png">
				</div>
			</div>
		</div>
	</div>

	<div class="padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<h4>About Dashboard</h4>
					<p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem placeat quam nostrum itaque ut cum quasi at nam quas repellat, earum rem consectetur architecto sed iure, obcaecati ab veniam, laudantium illo.</p>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<img src="images/example2.png">
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<h4>About Wellness Activity</h4>
					<p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem placeat quam nostrum itaque ut cum quasi at nam quas repellat, earum rem consectetur architecto sed iure, obcaecati ab veniam, laudantium illo.</p>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<img src="images/example2.png">
				</div>
			</div>
		</div>
	</div>

    </main>

	<footer class="container-fluid text-center">
		<div class="row">
			<div class="col-sm-4">
				<h3>Contact us</h3>
				<br>
				<h6>Address: ****************</h6>
				<h6>Email: ****************</h6>
				<h6>Phone: ******************</h6>
				<h6>Fax: ******************</h6>
			</div>
			<div class="col-sm-4">
				<h3>About VWS</h3>
				<br>
				<ul>
				<li><a href="#">login page</a></li>
				<li><a href="#">Home page</a></li>
				<li><a href="#">About page</a></li>
				<li><a href="#">UPEI</a></li>
				</ul>
			</div>
			<div class="col-sm-4">
			<h3>Something</h3>
				<br>
				<h6>something</h6>
				<h6>something</h6>
				<h6>something</h6>
				<h6>something</h6>
			</div>
		</div>
	</footer>

    <script>

    var login = document.getElementById("login");
    var register = document.getElementById("register");

    function displaySignIn() {
        register.style.display = "none";
        login.style.display = "block";
    }

    function displayRegister() {
        register.style.display = "block";
        login.style.display = "none";
    }


    </script>

</body>

</html>
