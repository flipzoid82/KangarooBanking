
<?php
	session_start();
	$fname = $_SESSION['u_first'];
	$lname = $_SESSION['u_last'];
	include_once 'includes/dbh.inc.php';
	include_once 'includes/getbalance.inc.php';
	include 'includes/logout.inc.php';
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="UTF-8">
	<title>Account Summary</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
</head>
	
	<!-- Main Content -->
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
			echo '<li class="navbar-text" style="color:white">Welcome, '.$fname.' '.$lname,'!'; 
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


	<main>

	<!-- For convenience 
		style="background-color:blue"
	-->

		<div class="container mx-center mt-5">
		<div class="card" style="border-radius: 12px; background-color:#e9eaeb" >
				<div class="card-body">
					<h3 class="card-title font-weight-bold">Account Summary</h3>
					
				</div>
				

				<div class="container w-100" >
				<div class="card mb-3" style="border-radius: 12px">
					<div class="card-body">

						<div class="container">

							<div class="row">

								<div class="col">
									<h3 class="card-title">Account Type</h3>

								</div>

								<div class="col">
									<h3 class="card-title">Balance</h3>

								</div>

							</div>
							
						</div>

						<ul class="list-group list-group-flush">


							<div class="row">

								<div class="col">
									<li class="list-group-item">
									<h5><?php echo 'Checking - '.$c_acct_num; ?></h5></li>
								</div>

								<div class="col">
									<li class="list-group-item"><h5><?php echo '$'.$c_bal; ?></h5></li></li>
								</div>

							</div>

							<div class="row">

								<div class="col">
									<li class="list-group-item"><h5><?php echo 'Savings - '.$svg_acct_num; ?></h5></li></li>
								</div>

								<div class="col">
									<li class="list-group-item">
									<h5>
									<?php echo '$'.$svg_bal; ?></li>
									</h5>
									
								</div>

							</div>

						</ul>


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
  <div class="card" style="border-radius: 12px">
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
  <div class="card" style="border-radius: 12px">
  <img class="card-img-top" src="images/profile.jpeg" alt="Card image cap" style="border-radius: 12px">
    <div class="card-body">
      <h5 class="card-title text-center">
	  Profile</h5>
	  <hr>
      <p class="card-text">View your existing information associated with your account.  Quickly implement any changes thanks to our state of the art process</p>
    </div>

	 <div class="card-footer">
	 <a href="viewprofile.php" class="btn btn-outline-primary  btn-block" role="button" aria-pressed="true">Start</a>
    </div>
  </div>

	

</div>
</div>


	

	<!--
	<ul class="list-group list-group-flush">
						<li class="list-group-item">Cras justo odio</li>
						<li class="list-group-item">Cras justo odio</li>
					</ul>
	-->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>



