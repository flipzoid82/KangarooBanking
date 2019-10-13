<?php
	session_start();
	include_once 'includes/dbh.inc.php';
	include_once 'includes/getUserInfo.inc.php';

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>User Profile</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style="background-color:whitesmoke">


	<header>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand ml-1" href="main.php">
<img src="images/logo2.png" width="80" height="50" class="d-inline-block align-top" alt="">
</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="navbar-nav ml-auto">
			<?php
			echo '<li class="navbar-text" style="color:white">Welcome, '.$first.' '.$last,'!'; 
			echo '</li>';
			?>
		</ul>

		<!--<li class="navbar-item"><a href="#">Account Summary</a></li>-->

						<ul class="navbar-nav ml-auto">
					<li class="nav-item ml-auto">
        				<a class="nav-link" href="main.php">Account Summary</a>
      				</li>

					  <form action="includes/logout.inc.php" method="POST">

							<button class="btn btn-primary my-2 my-sm-0 mr-2" type="submit" name="submit">Logout</button>
					</form>

				</ul>
	</div>
	</div>
</nav>
</header>



<div class="container mx-center mt-5">
<div class="card" style="border-radius: 12px; background-color:#e9eaeb" >
			<div class="card-body">
					<h3 class="card-title font-weight-bold">User Profile</h3>
					<h6 class="card-subtitle mt-2 mb-2 text-muted">Name: <?php echo $first." ".$last;?><br></h6>
			</div>
				<div class="container w-100" >
					<div class="card mb-3" style="border-radius: 12px">
						<div class="card-body">

							<div class="container">

								<div class="row">

									<div class="col">
										<h5 class="card-title">Credentials</h5>
										<hr>
											<div class="card">
  												<ul class="list-group list-group-flush">
    												<li class="list-group-item">
														<div class="container">
															<div class="row">
																<div class="col">
																	Username: <?php echo $username;?><br>
																</div>

																<div class="col">
																	<button class="btn btn-primary ml-5" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    																	Edit
  																	</button>
																</div>
															
															</div>

														<div class="collapse" id="collapseExample">
  																<div class="card card-body">
																	<form action="includes/editusername.inc.php" method="POST">
																		<div class="form-group">
																			<label for="change-user">Change Username</label>
																			<input class="form-control" type="text" id="change-user" name="uid" placeholder="<?php echo $username;?>">
																			
																		</div>
																		<button class="btn btn-primary" type="submit" name="submit">Submit</button>
																	</form>
    																
  																</div>
															</div>

													</div>
												</li>


    											<li class="list-group-item">
													<div class="container">
														<div class="row">
															<div class="col">
																Password: ********* 
															</div>

															<div class="col">
																<button class="btn btn-primary ml-5" type="button" data-toggle="collapse" data-target="#collapsePas" aria-expanded="false" aria-controls="collapseExample">
    																Edit
  																</button>
															</div>
															
														</div>

														<div class="collapse" id="collapsePas">
  																<div class="card card-body">
																	<form action="includes/editpwd.inc.php" method="POST">

																		
																		<div class="form-group">

																				<label for="change-pass">Current Password</label>
																				<input type="password"  name="curr_pwd" class="form-control" placeholder="*********">
																		</div>

																		<div class="form-group">
																				<label for="change-pass">New Password</label>
																				<input type="password"  name="new_pwd" class="form-control" placeholder="*********">
																		</div>

																		
																		<button class="btn btn-primary mt-3" type="submit" name="submit">Submit</button>
																	</form>
    																
  																</div>
															</div>

													</div>
												</li>

  											</ul>
										</div>

									</div>
							
								</div>



<div class="row mt-5">

	<div class="col">
		<h5 class="card-title">Mailing Address</h5>
		<hr>


	<div class="card">
		  <ul class="list-group list-group-flush">
		  <li class="list-group-item">
			<div class="container">
				<div class="row">
					<div class="col">
						Address: <?php echo $street;?><br>
			 			<?php echo $city.", ".$state." ".$zip;?><br>
					</div>

						<div class="col">
							<button class="btn btn-primary ml-5" type="button" data-toggle="collapse" data-target="#collapseAddress" aria-expanded="false" aria-controls="collapseAddress">
    							Edit
  							</button>
						</div>							
				</div>

				<div class="collapse" id="collapseAddress">
	  				<div class="card card-body">
						<form action="includes/editaddress.inc.php" method="POST">
							<div class="form-group">

								<label for="change-street">Street</label>
								<input class="form-control" id="change-street" type="text" name="street" placeholder="<?php echo $street;?>">
							</div>
							<div class="form-group">
								<label for="change-city">City</label>
								<input class="form-control" id="change-city" type="text" name="city" placeholder="<?php echo $city;?>">
							</div>
							<div class="form-group">
								<label for="change-state">State</label>
								<input class="form-control" id="change-state" type="text" name="state" placeholder="<?php echo $state;?>">
							</div>
							<div class="form-group">
								<label for="change-zip">Zip Code</label>
								<input class="form-control" id="change-zip" type="text" name="zip" placeholder="<?php echo $zip;?>">
							</div>
							
							<button class="btn btn-primary" type="submit" name="submit">Submit</button>
						</form>
    																
  					</div>
				</div>

			</div>
		</li>

		  </ul>
	</div>

</div>

</div>


<div class="row mt-5">

<div class="col">
	<h5 class="card-title">Contact Information</h5>

<hr>


	<div class="card">
		  <ul class="list-group list-group-flush">


			<li class="list-group-item">
				<div class="container">
					<div class="row">
						<div class="col">
							Email: <?php echo $email;?>
						</div>

						<div class="col">
							<button class="btn btn-primary ml-5" type="button" data-toggle="collapse" data-target="#collapseEmail" aria-expanded="false" aria-controls="collapseEmail">
								Edit
							  </button>
						</div>
						
					</div>

					<div class="collapse" id="collapseEmail">
							  <div class="card card-body">
								<form action="includes/editemail.inc.php" method="POST">
									<div class="form-group">
										<label for="change-email">Email</label>
										<input class="form-control" id="change-email" type="text" name="email" placeholder="<?php echo $email;?>">
									</div>
									<button class="btn btn-primary" type="submit" name="submit">Submit</button><br>
								</form>
								
							  </div>
						</div>

				</div>
			</li>


			<li class="list-group-item">
				<div class="container">
					<div class="row">
						<div class="col">
							Phone: <?php echo $phone;?>
						</div>

						<div class="col">
							<button class="btn btn-primary ml-5" type="button" data-toggle="collapse" data-target="#collapsePhone" aria-expanded="false" aria-controls="collapsePhone">
								Edit
							  </button>
						</div>
						
					</div>

					<div class="collapse" id="collapsePhone">
							  <div class="card card-body">
								<form action="includes/editphone.inc.php" method="POST">
									<div class="form-group">
										<label for="change-phone">Phone Number</label>
										<input class="form-control" id="change-phone" type="text" name="phone" placeholder="<?php echo $phone;?>">
									</div>
									<button class="btn btn-primary" type="submit" name="submit">Submit</button><br>
								</form>
								
							  </div>
						</div>

				</div>
			</li>

		  </ul>
	</div>

</div>

</div>

							</div>
						</div>
					</div>

				</div>


			
		</div>
	</main>



	<div class="container mt-5">
		<hr>
	</div>

	<div class="container mt-5 mb-5">
	<div class="card-deck">
	<div class="card" style="border-radius: 12px">
	<img class="card-img-top" src="images/transfer.jpeg" alt="Card image cap" style="border-radius: 12px">
    <div class="card-body">
      <h5 class="card-title text-center">Transfer Funds</h5>
	  <hr>
      <p class="card-text">Transfering funds has never been easier!  Select the account where the money is coming from, and select the destination.  Afterwards, enter the amount you wish to send.</p>
      
    </div>

	 <div class="card-footer">

	 <a href="transfer.php" class="btn btn-outline-primary  btn-block" role="button" aria-pressed="true">Start</a>
    </div>
  </div>
  <div class="card " style="border-radius: 12px">
  <img class="card-img-top" src="images/pay.jpeg" alt="Card image cap" style="border-radius: 12px">
    <div class="card-body">
      <h5 class="card-title text-center">Bill Pay</h5>
	  <hr>
      <p class="card-text">No more waiting in line!  Pay your bills directly from the comfort of your own home.</p>
      
    </div>

	 <div class="card-footer">
	 <a href="billpay.php" class="btn btn-outline-primary  btn-block" role="button" aria-pressed="true">Start</a>
    </div>

	
  </div>
  <div class="card  text-white bg-dark" style="border-radius: 12px">
  <img class="card-img-top" src="images/profile.jpeg" alt="Card image cap" style="border-radius: 12px">
    <div class="card-body">
      <h5 class="card-title text-center">Profile</h5>
	  <hr>
      <p class="card-text">View your existing information associated with your account.  Quickly implement any changes thanks to our state of the art process</p>
    </div>

	 <div class="card-footer">
	 <a href="viewprofile.php" class="btn btn-outline-primary  btn-block disabled" role="button" aria-pressed="true">Start</a>
    </div>
  </div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>