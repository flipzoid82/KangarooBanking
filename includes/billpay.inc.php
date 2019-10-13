<?php
	session_start();
	include_once 'dbh.inc.php';
	include_once 'getbalance.inc.php';

if(isset($_POST['send'])){
	$acct_num = mysqli_real_escape_string($conn, $_POST['acct_num']);
	$biller_name = mysqli_real_escape_string($conn, $_POST['biller_name']);
	$biller_address = mysqli_real_escape_string($conn, $_POST['biller_address']);
	$account = mysqli_real_escape_string($conn, $_POST['account']);
	$amount = mysqli_real_escape_string($conn, $_POST['amount']);
	$send_date = mysqli_real_escape_string($conn, $_POST['send_date']);

	
	if(empty($acct_num) || empty($biller_name) || empty($biller_address) || empty($account) || empty($amount) ){
		header("Location: ../billpay.php?billpay=empty");
		exit();
	} else {
		if($account == 'checking'){
			//Pay from checking
			if($c_bal <= 0){
				header("Location: ../billpay.php?billpay=ckAcct0bal");
				exit();
			} elseif($amount > $c_bal){
				header("Location: ../billpay.php?billpay=amt>ckAcct");
				exit();
			} else {
				//Deduct Amount From $c_bal then update db
				$new_checking_amount = $c_bal-$amount;
				
				//Update checking account with $new_checking_amount
				$sql = "UPDATE `checking_acct` SET `balance` = '$new_checking_amount' WHERE `checking_acct`.`user_ssn` = $u_ssn";
				mysqli_query($conn, $sql);
				header("Location: ../billpay.php?billpay=success");
				exit();
			}
			
		} elseif($account == 'savings'){
			//Pay from savings
			if($svg_bal < 0){
				header("Location: ../billpay.php?billpay=svg0bal");
				exit();
			} elseif($amount > $svg_bal){
				header("Location: ../billpay.php?Amt>svgAcct");
				exit();
			} else {
				//Deduct Amount From $svg_bal then update db
				$new_savings_amount = $svg_bal-$amount;
				//Update savings account with $new_savings_amount
				$sql = "UPDATE `savings_acct` SET `balance` = '$new_savings_amount' WHERE `savings_acct`.`user_ssn` = $u_ssn";
				mysqli_query($conn, $sql);
				header("Location: ../billpay.php?billpay=success");
				exit();
			}
		}
		
	}
} else if(isset($_POST['cancel'])){
	header("Location: ../billpay.php?billpay=cancelled");
	exit();
}

?>