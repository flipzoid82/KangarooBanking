
<?php
	session_start();
	$fname = $_SESSION['u_first'];
	$lname = $_SESSION['u_last'];
	include_once 'includes/dbh.inc.php';
	include_once 'includes/getbalance.inc.php';
    include 'includes/logout.inc.php';
    include 'includes/statements.inc.php';
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="UTF-8">
	<title>Statements</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
</head>
	
	<!-- Main Content -->
<body style="background-color:lavender">

	<header>


		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand ml-1" href="main.php"><h4>Kangaroo</h4></a>
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
		<div class="card border-dark">
				<div class="card-body">
					<h3 class="card-title font-weight-bold">Statements</h3>
				</div>

				<div class="container w-100" >
				<div class="card border-dark mb-3">
					<div class="card-body">

						<div class="container">

							<div class="row">

								<div class="col">
									<h5 class="card-title">Click to download</h5>

						                <ul class="list-group list-group-flush">
                                            <ul class="list-inline">
                                            <li class="list-inline-item"><?php echo 'Statement ID - '.$id; ?></li>
									        <li class="list-inline-item"><?php echo 'Date - '.$date; ?></li></li>
                                            <li class="list-inline-item">
                                            
                                            
                                                <button href="includes/downloadstmt.inc.php" class="list-inline-item btn btn-primary"  name="submit">Download</button>
                                            
                                                
                                            </li>
                                            </ul>
									        

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
	<div class="card border-dark">
    <div class="card-body">
      <h5 class="card-title text-center">Transfer Funds</h5>
	  <hr>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      
    </div>

	 <div class="card-footer">

	 <a href="transfer.php" class="btn btn-outline-primary  btn-block" role="button" aria-pressed="true">Start</a>
    </div>
  </div>
  <div class="card border-dark">
    <div class="card-body">
      <h5 class="card-title text-center">Bill Pay</h5>
	  <hr>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      
    </div>

	 <div class="card-footer">
	 <a href="billpay.php" class="btn btn-outline-primary  btn-block" role="button" aria-pressed="true">Start</a>
    </div>

	
  </div>
  <div class="card border-dark">
    <div class="card-body">
      <h5 class="card-title text-center">Profile</h5>
	  <hr>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>

	 <div class="card-footer">
	 <a href="viewprofile.php" class="btn btn-outline-primary  btn-block" role="button" aria-pressed="true">Start</a>
    </div>
  </div>

	<div class="card text-white bg-dark">
    <div class="card-body">
      <h5 class="card-title text-center">Print Statements</h5>
	  <hr>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>

	 <div class="card-footer">
	 <a href="statements.php" class="btn btn-outline-primary  btn-block disabled" role="button" aria-pressed="true">Start</a>
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



