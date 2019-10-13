<?php
	session_start();
	$u_ssn = $_SESSION['u_ssn'];

	$sql = "SELECT * FROM `users` WHERE `user_ssn`=$u_ssn;";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	$first = $row['user_first'];
	$last = $row['user_last'];
	$username = $row['user_uid'];
	$email = $row['user_email'];
	$street = $row['user_street'];
	$state = $row['user_state'];
	$city = $row['user_city'];
	$zip = $row['user_zip'];
	$phone = $row['user_phone'];
	$pwd = $row['user_pwd'];


?>
