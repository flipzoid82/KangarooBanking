<?php
	session_start();
	include_once 'dbh.inc.php';

	$ssn = $_SESSION['u_ssn'];

	if(isset($_POST['submit'])){
		
		$username = mysqli_real_escape_string($conn, $_POST['uid']);
		
		if(empty($username)){
			header("Location: ../viewprofile.php?form=empty");
			exit();
		} else {
			$sql = "SELECT * FROM users WHERE `user_uid`=$ssn;";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			if ($resultCheck > 0) {
				header("Location: ../viewprofile.php?username=taken");
				exit();
			} else {
				$sql = "UPDATE `users` SET `user_uid` = '$username' WHERE `users`.`user_ssn` = $ssn;";
				mysqli_query($conn, $sql);
				header("Location: ../viewprofile.php?usernameChanged");
				exit();
					
				
			}
		}
	} else {
		header("Location: ../viewprofile.php");
		exit();
	}
		
?>