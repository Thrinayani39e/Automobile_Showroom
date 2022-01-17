<?php
	$name_oc = $_POST['name_oc'];
	$credit_no = $_POST['credit_no'];
	$amt = $_POST['amt'];
    $exp_month = $_POST['exp_month'];
	$exp_year = $_POST['exp_year'];
    $cvv = $_POST['cvv'];
	$conn = new mysqli('localhost','root','','automobile_showroom');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$sql = "insert into payment(name_oc,credit_no,amt,exp_month,exp_year,cvv) values('$name_oc', '$credit_no',$amt,$exp_month,$exp_year,$cvv);";
		$conn->close();
		echo "Congratulation!! Your payment was successful";
	
	}
?>