<?php
	session_start();
	include_once 'dbh.inc.php';
	include_once 'getbalance.inc.php';

if(isset($_POST['transfer'])){

	$first_option = mysqli_real_escape_string($conn, $_POST['account1']);
	$second_option = mysqli_real_escape_string($conn,$_POST['account2']);
	$amount = mysqli_real_escape_string($conn, $_POST['amount']);

	if (empty($amount)) {
		header("Location: Location: ../transfer.php?transfer=AmountEmpty");
	} else {
		if($first_option == checking1 && $second_option == checking2 || $first_option == savings1 && $second_option == savings2){
			header("Location: ../transfer.php?transfer=invalid");
			exit();
		//Transfer amount from checking to savings"
		} elseif($first_option == checking1 && $second_option == savings2){
			if($c_bal <= 0){
				header("Location: ../transfer.php?ckAcct=0bal");
				exit();
			} elseif($amount > $c_bal){
				header("Location: ../transfer.php?Amt>ckAcct");
				exit();
			} else {
				//Deduct Amount From $c_bal then add Amount to $svg_bal then update db
				$new_checking_amount = $c_bal-$amount;
				$new_savings_amount = $svg_bal+$amount;

				//Update checking account with $new_checking_amount
				$sql = "UPDATE `checking_acct` SET `balance` = '$new_checking_amount' WHERE `checking_acct`.`user_ssn` = $u_ssn";
				mysqli_query($conn, $sql);
				//Update savings account with $new_savings_amount
				$sql = "UPDATE `savings_acct` SET `balance` = '$new_savings_amount' WHERE `savings_acct`.`user_ssn` = $u_ssn";
				mysqli_query($conn, $sql);
				header("Location: ../transfer.php?transfer=success");
			}
		//Transfer amount from savings to checking
		} elseif($first_option == savings1 && $second_option == checking2){
			if($svg_bal < 0){
				header("Location: ../transfer.php?svgAcct=0bal");
				exit();
			} elseif($amount > $svg_bal){
				header("Location: ../transfer.php?Amt>svgAcct");
				exit();
			} else {
				//Deduct Amount From $svg_bal then add Amount to $c_bal then update db
				$new_savings_amount = $svg_bal-$amount;
				$new_checking_amount = $c_bal+$amount;

				//Update savings account with $new_savings_amount
				$sql = "UPDATE `savings_acct` SET `balance` = '$new_savings_amount' WHERE `savings_acct`.`user_ssn` = $u_ssn";
				mysqli_query($conn, $sql);
				//Update checking account with $new_checking_amount
				$sql = "UPDATE `checking_acct` SET `balance` = '$new_checking_amount' WHERE `checking_acct`.`user_ssn` = $u_ssn";
				mysqli_query($conn, $sql);
				header("Location: ../transfer.php?transfer=success");
			}
		}
	}


} elseif(isset($_POST['cancel'])){
	header("Location: ../transfer.php?transfer=cancelled");
	exit();
	//echo "<script type='text/javascript'>alert('Transfer Cancelled!');</script>";
}
?>
