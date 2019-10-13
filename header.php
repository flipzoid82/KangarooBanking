<?php
	session_start();
	$fname = $_SESSION['u_first'];
	$lname = $_SESSION['u_last'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
	<title>Kangaroo Banking</title>
	<link rel="stylesheet" href="style.css">
</head>
	
	<header>
		<a class="site-logo" href="index.php">
          <img class="logo" src="images/logo.jpg">
     	</a>
		
		<nav class="misc-nav">
				<ul>
					<?php
					echo '<li>WELCOME, '.$fname.' '.$lname,'!'; 
					echo '</li>';
					?>
				</ul>
				
			</nav>

			<nav class="site-nav">
				<ul>
					<form action="includes/logout.inc.php" method="POST">
					<button type="submit" name="submit">Logout</button>
					</form>
				</ul>
			</nav>
	</header>