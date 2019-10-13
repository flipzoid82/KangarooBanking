<?php
	session_start();
	$u_ssn = $_SESSION['u_ssn'];

	$sql = "SELECT * FROM `users` WHERE `user_ssn`=$u_ssn;";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	$first = $row['user_first'];
	$last = $row['user_last'];
	$username = $row['user_uid'];

    $sql = "SELECT * FROM `statements` WHERE `user_ssn`=$u_ssn;";
	$result = mysqli_query($conn, $sql);
	$srow = mysqli_fetch_assoc($result);
    $id = $srow['stmt_id'];
    $date = $srow['stmt_date'];
    $ssn = $srow['user-ssn'];
    $file = $srow['stmt_file'];
    

?>
