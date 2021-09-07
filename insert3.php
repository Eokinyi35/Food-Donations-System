<?php
require_once "connection.php";

if(isset($_POST["submit"])){
	// Variable declaration
	
	$username = htmlspecialchars($_POST["username"]);
	
	$password = htmlspecialchars($_POST["password"]);
	$hash_password = md5($password);
	
	

	$sql = "INSERT INTO admin (username, password) VALUES ('$username', '$hash_password')";


	if ($conn->query($sql) === TRUE) {
		echo '<script>alert("signup Successful")</script>';
		echo "<script>window.close(); window.location = \"login.php\";</script>";
		@header("Location: login.php");
		exit();
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
?>