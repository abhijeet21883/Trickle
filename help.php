<?php
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Database connection
	$conn = new mysqli('localhost','root','','tickle');
	if($conn->connect_error)
	{
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
         else 
        {
		$stmt = $conn->prepare("insert into registration(username, password) values(?, ?)");
		$stmt->bind_param( "ss",$username, $password);//binding the parameters
		$execval = $stmt->execute();
		echo " Registration successful";
		$stmt->close();
		$conn->close();
	}
?>
