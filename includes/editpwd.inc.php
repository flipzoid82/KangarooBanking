<?php
	session_start();
	include_once 'dbh.inc.php';
	include_once 'getUserInfo.inc.php';

	$ssn = $_SESSION['u_ssn'];
	

	if(isset($_POST['submit'])){
		
		$curr_pwd = mysqli_real_escape_string($conn, $_POST['curr_pwd']);
		$new_pwd = mysqli_real_escape_string($conn, $_POST['new_pwd']);
		
		if(empty($curr_pwd) || empty($new_pwd)){
			header("Location: ../viewprofile.php?form=empty");
			exit();
		} else {
		
			//De-hashing the password
			//$pwd is from getUserInfo.inc.php
			$hashedPwdCheck = password_verify($curr_pwd, $pwd);
				if ($hashedPwdCheck == false) {
					header("Location: ../viewprofile.php?pwd=matcherror");
					exit();
				//Updating pwd in the db
				} elseif ($hashedPwdCheck == true) {
					//Hashing the new password
					$hashedPwd = password_hash($new_pwd, PASSWORD_DEFAULT);
					
					// Insert the user into the database
					$sql = "UPDATE `users` SET `user_pwd` = '$hashedPwd' WHERE `users`.`user_ssn` = $ssn;";
					mysqli_query($conn, $sql);
					header("Location: ../viewprofile.php?pwd=success");
					exit();
				}
		}
	} else {
		header("Location: ../viewprofile.php");
		exit();
	}
		
?>