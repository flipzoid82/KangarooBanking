<?php
	session_start();
	include_once 'dbh.inc.php';
	include_once 'getUserInfo.inc.php';

	$ssn = $_SESSION['u_ssn'];

	if(isset($_POST['submit'])){
		
		$new_street = mysqli_real_escape_string($conn, $_POST['street']);
		$new_city = mysqli_real_escape_string($conn, $_POST['city']);
		$new_state = mysqli_real_escape_string($conn, $_POST['state']);
		$new_zip = mysqli_real_escape_string($conn, $_POST['zip']);
		
		if(empty($new_street) || empty($new_city) || empty($new_state) || empty($new_zip)){
			header("Location: ../viewprofile.php?form=empty");
			exit();
		} else {
			// Update user address in db
			$sql = "UPDATE `users` SET `user_street` = '$new_street', `user_city` = '$new_city', `user_state` = '$new_state', `user_zip` = '$new_zip' WHERE `users`.`user_ssn` = $ssn;";
			mysqli_query($conn, $sql);
			header("Location: ../viewprofile.php?address=success");
			exit();
		}		
	}

?> 