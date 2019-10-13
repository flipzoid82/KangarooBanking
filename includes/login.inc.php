<?php

session_start();

if (isset($_POST['submit'])) {
	
	include 'dbh.inc.php';
	
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	
	//Error handlers
	//Check if inputs are empty
	if (empty($uid) || empty($pwd)) {
		header("Location: ../index.php?login=empty");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE `user_uid`='$uid' OR `user_email`='$uid';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../index.php?login=error");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				//De-hashing the password
				$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
				if ($hashedPwdCheck == false) {
					header("Location: ../index.php?login=error");
					exit();
				} elseif ($hashedPwdCheck == true) {
					//Log in the user here
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_ssn'] = $row['user_ssn'];
					$_SESSION['u_uid'] = $row['user_uid'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_street'] = $row['user_street'];
					$_SESSION['u_state'] = $row['user_state'];
					$_SESSION['u_city'] = $row['user_city'];
					$_SESSION['u_zip'] = $row['user_zip'];
					$_SESSION['u_phone'] = $row['user_phone'];
					
					header("Location: ../main.php?login=success");
					exit();
				}
			}
		}
	}
} else {
	header("Location: ../index.php?login=error");
	exit();
}