<?php
require_once "connection.php";

if(isset($_POST["submit"])){
	// Variable declaration
	$organizationname = htmlspecialchars($_POST["organizationname"]);
	$phoneno = htmlspecialchars($_POST["phoneno"]);
	$email = htmlspecialchars($_POST["email"]);
	$location = htmlspecialchars($_POST["location"]);
	

	$sql = "INSERT INTO dispatch_center (organizationname, phoneno, email, location) VALUES ('$organizationname', '$phoneno', '$email', '$location')";


	if ($conn->query($sql) === TRUE) {
		//echo "New record created successfully";
		@header("Location: admin.php");
		exit();
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
?>