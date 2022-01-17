<?php
	$ins_num = $_POST['ins_num'];
	$ins_amt = $_POST['ins_amt'];
	$ins_type = $_POST['ins_type'];
    $ins_date = $_POST['ins_date'];
	$conn = new mysqli('localhost','root','','automobile_showroom');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$sql = "insert into insurance(ins_num, ins_amt, ins_type, ins_date) values($ins_num,  $ins_amt, '$ins_type', $ins_date);";

		$conn->query($sql);
		$conn->close();
		
	}
	echo "Now your car is securely safeguarded with Insurance";
		
?>