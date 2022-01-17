<?php
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email_id = $_POST['email_id'];
    $DOB = $_POST['DOB'];
	$gender = $_POST['gender'];
    $Dno = $_POST['Dno'];
    $street = $_POST['street'];
    $city = $_POST['city'];
	$phonenum = $_POST['phonenum'];

	$conn = new mysqli('localhost','root','','automobile_showroom');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$sql = "insert into customer(fname, lname,email_id, DOB,gender, Dno, street, city, phonenum) values( '$fname', '$lname','$email_id',$DOB, '$gender',$Dno, '$street', '$city', '$phonenum');";
		
		$conn->query($sql);
		$conn->close();
		echo "<script>
		window.location.href='booknow.html'
	</script>";
	}
?>