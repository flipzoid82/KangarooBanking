<?php
	session_start();
	include_once 'dbh.inc.php';
	include_once 'getUserInfo.inc.php';

	$ssn = $_SESSION['u_ssn'];

	if(isset($_POST['submit'])){
		
		$new_email = mysqli_real_escape_string($conn, $_POST['email']);
		
		if(empty($new_email)){
			header("Location: ../viewprofile.php?form=empty");
			exit();
		} else {
			//Check if email is valid
			if (!filter_var($new_email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../viewprofile.php?email=invalid");
				exit();
			} else {
				// Insert the user into the database
				$sql = "UPDATE `users` SET `user_email` = '$new_email' WHERE `users`.`user_ssn` = $ssn;";
				mysqli_query($conn, $sql);
				header("Location: ../viewprofile.php?email=success");
				exit();
			}		
		}
	}

?>