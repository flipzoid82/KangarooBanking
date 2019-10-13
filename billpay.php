<?php
	session_start();
	$fname = $_SESSION['u_first'];
	$lname = $_SESSION['u_last'];
	include_once 'includes/dbh.inc.php';
	include_once 'includes/getbalance.inc.php';
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body style="background-color:whitesmoke">

<!--style="background-color:lavender"-->

	<header>


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



	<div class="container mx-center mt-5">
	<div class="card" style="border-radius: 12px; background-color:#e9eaeb" >
			<div class="card-body">
					<h3 class="card-title font-weight-bold">Pay Your Bills</h3>
			</div>
				<div class="container w-100" >
				<div class="card mb-3" style="border-radius: 12px">
					<div class="card-body">

						<div class="container">

							<div class="row">

								<div class="col">
									<h5 class="card-title">Enter Biller Information</h5>

									<hr>


									<form action="includes/billpay.inc.php" method="POST">
							<div class="form-group">
								<label >Account Number</label>
								<input type="text" name="acct_num" class="form-control" placeholder="Account Number">
							</div>

								<div class="form-group">
									<label >Company Name</label>
									<input type="text" name="biller_name" class="form-control" placeholder="Company Name">
								</div>

								<div class="form-group">
									<label>Company Address</label>
									<textarea class="form-control" id="exampleFormControlTextarea1" type="text" name="biller_address" rows="3"></textarea>
								</div>

								<div class="form-group">
									<label>Select Account</label>
									<select class="form-control" name="account">
										<option value="checking"> <?php echo 'Checking - $'.$c_bal;?></option>
										<option value="savings"> <?php echo 'Savings - $'.$svg_bal;?> </option>
									</select>
								</div>

								<div class="form-group">

								<div class="form-row">

									<div class="col input-group mt-3 mb-4">
	  									<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">Amount in $</span>
	  									</div>
										<input name="amount" type="text" class="form-control" placeholder="Ex. 100.25" aria-label="Username" aria-describedby="basic-addon1">
										</div>
									</div>


								<div class="form-group">
									<label >Send By</label>
									<input type="date" name="send_date" class="form-control" placeholder="XX/XX/XXXX">
								</div>


								<a href="main.php" class="btn btn-outline-primary mr-3 mt-3" role="button" name="cancel" aria-pressed="true">Cancel</a>
								<button class="btn btn-outline-primary mt-3" type="submit" name="send">Submit</button>
							</form>

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
  <div class="card text-white bg-dark" style="border-radius: 12px">
  <img class="card-img-top" src="images/pay.jpeg" alt="Card image cap" style="border-radius: 12px">
    <div class="card-body">
      <h5 class="card-title text-center">Bill Pay</h5>
	  <hr>
      <p class="card-text">No more waiting in line!  Pay your bills directly from the comfort of your own home.</p>
      
    </div>

	 <div class="card-footer">
	 <a href="billpay.php" class="btn btn-outline-primary  btn-block disabled" role="button" aria-pressed="true">Start</a>
    </div>

	
  </div>
  <div class="card" style="border-radius: 12px">
  <img class="card-img-top" src="images/profile.jpeg" alt="Card image cap" style="border-radius: 12px">
    <div class="card-body">
      <h5 class="card-title text-center">Profile</h5>
	  <hr>
      <p class="card-text">View your existing information associated with your account.  Quickly implement any changes thanks to our state of the art process</p>
    </div>

	 <div class="card-footer">
	 <a href="viewprofile.php" class="btn btn-outline-primary  btn-block" role="button" aria-pressed="true">Start</a>
    </div>
  </div>




	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>