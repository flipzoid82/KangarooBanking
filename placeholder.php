<?php

if (isset($_POST['submit'])) {
	
	include_once 'dbh.inc.php';
	
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$ssn = mysqli_real_escape_string($conn, $_POST['ssn']);
	$dob = mysqli_real_escape_string($conn, $_POST['dob']);
	
	if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd) || empty($ssn)) {
		header("Location: ../signup.php?signup=empty");
		exit();
	} else {
		// Check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			header("Location: ../signup.php?signup=invalid");
			exit();
		} else {
			//Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../signup.php?signup=email");
				exit();
			} else {
				//Check if username is taken
				$sql = "SELECT * FROM users WHERE user_uid='$uid'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					header("Location: ../signup.php?signup=usertaken");
					exit();
				} else {
					//Check if SSN is already a user
					$sql = "SELECT * FROM users WHERE `user_ssn`=$ssn;";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					if ($resultCheck > 0) {
						header("Location: ../signup.php?signup=SSNtaken");
						exit();
					} else {
						//Check if the user has a Checking Account in the system
						$sql = "SELECT * FROM `checking_acct` WHERE `user_ssn`=$ssn;";
						$result = mysqli_query($conn, $sql);
						$resultCheck = mysqli_num_rows($result);
						if ($resultCheck < 0) {
						header("Location: ../signup.php?NoAcctsRegistered");
						exit();
						} else {
							//Check if the user has a Savings Account in the system
							$sql = "SELECT * FROM `savings_acct` WHERE `user_ssn`=$ssn;";
							$result = mysqli_query($conn, $sql);
							$resultCheck = mysqli_num_rows($result);
							if ($resultCheck < 0) {
							header("Location: ../signup.php?NoAcctsRegistered");
							exit();
							} else {
								//Hashing the password
								$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
								// Insert the user into the database
								$sql = "INSERT INTO users (`user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`, `user_ssn`) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd', $ssn)";
								mysqli_query($conn, $sql);
								header("Location: ../index.php?signup=success");
								exit();
							}
						}
					}
				}
			}
		}
	}
} else {
	header("Location: ../signup.php");
	exit();
}
?>