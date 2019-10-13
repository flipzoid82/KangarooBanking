<?php
	
session_start();
$u_ssn = $_SESSION['u_ssn'];

$sql = "SELECT * FROM checking_acct WHERE `user_ssn`=$u_ssn;";
$result = mysqli_query($conn, $sql);
$crow = mysqli_fetch_assoc($result);
$c_acct_num = $crow['c_acct_num'];
$c_bal=$crow['balance'];

$sql = "SELECT * FROM savings_acct WHERE `user_ssn`=$u_ssn;";
$result = mysqli_query($conn, $sql);
$srow = mysqli_fetch_assoc($result);
$svg_acct_num = $srow['svg_acct_num'];
$svg_bal=$srow['balance'];