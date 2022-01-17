<?php
	$model_name = $_POST['model_name'];
	$model_year = $_POST['model_year'];
	$adv_amt = $_POST['adv_amt'];
    $fuel_type = $_POST['fuel_type'];
	

	$conn = new mysqli('localhost','root','','automobile_showroom');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$sql = "insert into booknow(model_name, model_year, adv_amt, fuel_type) values('$model_name', $model_year, $adv_amt, '$fuel_type');";
		
		$conn->query($sql);
		$conn->close();
		echo "<script>
		window.location.href='payment1.html'
	</script>";
		
		$conn->close();
	}
?>