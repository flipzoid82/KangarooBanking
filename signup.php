<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
	<title>Kangaroo Banking - Sign Up</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	
	<script src="https://use.typekit.net/kxf0iwn.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

</head>
	


<body style="background:url(images/login-background.jpg); background-size:cover" >
	
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



	<div class="container">
		<div class="row justify-content-left mt-5">
			<div class="col">
				<div class="card mb-5" style="border-radius: 12px; background-color:whitesmoke">

					<div class="card-body">
						<form action="includes/signup.inc.php" method="POST">
							<div class="form-group">
								<label for="login-name">First Name</label>
								<input type="text" name="first" class="form-control" id="login-name" placeholder="Ex. John">
							</div>

								<div class="form-group">
									<label for="login-pass">Last Name</label>
									<input type="text" name="last" class="form-control" id="login-pass" placeholder="Ex. Smith">
								</div>

								<div class="form-group">
									<label for="login-pass">E-mail</label>
									<input type="text" name="email" class="form-control" id="login-pass" placeholder="Ex. banker@yahoo.com">
								</div>

								<div class="form-group">
									<label for="login-pass">Username</label>
									<input type="text" name="uid" class="form-control" id="login-pass" placeholder="Ex. johnNY">
								</div>

								<div class="form-group">
									<label for="login-pass">Password</label>
									<input type="password" name="pwd" class="form-control" id="login-pass" placeholder="Password">
								</div>


								<div class="form-group">
									<label for="login-pass">Date Of Birth</label>
									<input type="text" name="dob" class="form-control" id="login-pass" placeholder="XX/XX/XXXX">
								</div>

								<div class="form-group">
									<label for="login-pass">Social Security</label>
									<input type="text" name="ssn" class="form-control" id="login-pass" placeholder="Social Security Number">
								</div>

								<button type="submit" class="btn btn-primary" name="submit" >Sign up</button>
							</form>
						</div>	
					</div>
				</div>

				
					<div class="col">
						<div class="card ml-5" style="border-radius: 12px; background-color:whitesmoke">
							<div class="card-body">
								<h5 class="card-title">Almost there!</h5>
								<p class="card-text">Before you can start using our services, tell us about yourself!<br><br>Members enjoy:<br></p>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item" style="background-color:whitesmoke">Competitive Rates</li>
								<li class="list-group-item" style="background-color:whitesmoke">No ATM fees</li>
								<li class="list-group-item" style="background-color:whitesmoke">24/7 Customer Support</li>
								<li class="list-group-item" style="background-color:whitesmoke">And much more!</li>
							</ul>
						</div>
					</div>
				
			</div>

		</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>