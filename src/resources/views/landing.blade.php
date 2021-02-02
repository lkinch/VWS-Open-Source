<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS ORDER MATTERS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/landing.css" />
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
			<h5>Enter Your Email and Password Here!</h5>
			<br>
				<div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">

                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
            	</div>

				<div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Your password" class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('password') border-red-500 @enderror" value="">

                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

				<div>
                    <button type="submit" class="btn btn-primary text-white px-4 py-3 rounded font-medium w-full">Login</button>
                </div>
				<br>
				<h6>If you don't have an account, register by clicking the button below:</h6>
			<!--login and register buttom here, change link when these pages done-->

            @if (Route::has('login'))
                  @auth
                      <a href="{{ route('logout') }}" class="btn btn-default btn-lg">Sign out</a>
                  @else
                      <a href="{{ route('register') }}" class="btn btn-default btn-lg">Register</a>
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

</body>

</html>
