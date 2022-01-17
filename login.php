<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	$conn = new mysqli('localhost','root','','automobile_showroom');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$sql = "insert into login(username, password) values('$username','$password');";
		
		$conn->query($sql);
		$conn->close();
		echo "<script>
		window.location.href='search.html'
	</script>";
		
		
	}
?>