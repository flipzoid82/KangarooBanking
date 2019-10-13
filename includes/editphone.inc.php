<?php
	session_start();
	include_once 'dbh.inc.php';
	include_once 'getUserInfo.inc.php';

	$ssn = $_SESSION['u_ssn'];

	if(isset($_POST['submit'])){
		
		$new_phone = mysqli_real_escape_string($conn, $_POST['phone']);
		
		if(empty($new_phone)){
			header("Location: ../viewprofile.php?form=empty");
			exit();
		} else {
			//Check if phone number is valid (rudimentary check only, no format checks)
			if ($new_phone<1000000000) {
				header("Location: ../viewprofile.php?phone=invalid");
				exit();
			} else {
				// Update phone number in db
				$sql = "UPDATE `users` SET `user_phone` = '$new_phone' WHERE `users`.`user_ssn` = $ssn;";
				mysqli_query($conn, $sql);
				header("Location: ../viewprofile.php?phone=success");
				exit();
			}		
		}
	}

?>