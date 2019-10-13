
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="UTF-8">
	<title>Kangaroo Banking - Log-in</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
</head>
	
	<!-- Main Content -->
<body style="background:url(images/login-background.jpg); background-size:cover" >

	<!--
		style="background-image: url(images/login-background.jpg); background-size:cover"

		<img src="images/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
		-->
	
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php">
		<img src="images/logo2.png" width="80" height="50" class="d-inline-block align-top" alt="">
		</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  			</button>




			<div class="collapse navbar-collapse" id="navbarSupportedContent">

			<ul class="navbar-nav ml-auto">
			<h4 style="color:white">Welcome to Kangaroo Banking</h4>
		</ul>

				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Branches & ATM's</a>
							<a class="dropdown-item" href="#">Loans</a>
							<a class="dropdown-item" href="#">Credit Cards</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Checking Account</a>
							<a class="dropdown-item" href="#">Savings Account</a>
						</div>
					</li>
				</ul>
			</div>


	</header>

	<main>



		<div class="alert alert-primary" role="alert">
  			<h6 class="text-center">For immediate assistance, please dial 1-800-0000</h6>
		</div>

		<div class="container-fluid">

		</div>

		<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4">
			<div class="card mt-5 ml-5" style="border-radius: 12px; background-color:whitesmoke">
				<div class="card-body">
					<form class="login-form" action="includes/login.inc.php" method="POST">
						<div class="form-group">
							<label for="login-name">User Name</label>
							<input type="text" name="uid" class="form-control" id="login-name" placeholder="Username or Email">
						</div>

						<div class="form-group">
							<label for="login-pass">Password</label>
							<input type="password" name="pwd" class="form-control" id="login-pass" placeholder="Password">
						</div>
						<button type="submit" class="btn btn-primary" name="submit" >Log In</button>
					</form>
				</div>
				<div class="card-footer text-muted">Don't have an account? <a href="signup.php">Sign up</a></div>
			</div>
		</div>

		<div class="col-sm-8">
			<blockquote class="blockquote mt-5 mr-5">
  				<p class="mb-0">
				  <h1 class="text-right display-3"><strong>It all starts<br> with<br>membership.</strong></h1>
				  <h3 class="text-right"> Open a word of possibilites when you join.</h3></p>
  				<h3 class="text-center ml-4"><a href="#"><p> Learn More >> </p></a></h3>
			</blockquote>
		</div>

	</div>
</div>
<!--
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

	  <ol class="carousel-indicators">
    	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  	</ol>
  	<div class="carousel-inner">
    	<div class="carousel-item active">
    	  <img class="d-block w-100" src="images/tron-1.jpg" alt="First slide">
			  <div class="carousel-caption d-none d-md-block">
    			<h4>TITLE</h4>
    			<p>SUBTEXT</p>
  			</div>
    	</div>
    	<div class="carousel-item">
      	<img class="d-block w-100" src="images/tron-2.jpeg" alt="Second slide">
		  <div class="carousel-caption d-none d-md-block">
    			<h4 style="color:black">TITLE</h4>
    			<p style="color:black">SUBTEXT</p>
  			</div>
    	</div>

  	</div>
  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
    	<span class="sr-only">Next</span>
  	</a>
</div>

<div class="container mt-5">
<hr>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4">
			<div class="card mt-5 ml-5">
				<div class="card-body">
					<form class="login-form" action="includes/login.inc.php" method="POST">
						<div class="form-group">
							<label for="login-name">User Name</label>
							<input type="text" name="uid" class="form-control" id="login-name" placeholder="Username or Email">
						</div>

						<div class="form-group">
							<label for="login-pass">Password</label>
							<input type="password" name="pwd" class="form-control" id="login-pass" placeholder="Password">
						</div>
						<button type="submit" class="btn btn-primary" name="submit" >Log In</button>
					</form>
				</div>
				<div class="card-footer text-muted">Don't have an account? <a href="signup.php">Sign up</a></div>
			</div>
		</div>

		<div class="col-sm-8">
			<div class="jumbotron">
  				<h1 class="display-4">Hello, world!</h1>
  				<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  				<hr class="my-4">
  				<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  				<p class="lead">
    				<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  				</p>
			</div>
		</div>
	</div>
</div>


<div class="container mt-5">
	<hr>
</div>




-->


	</main>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>
