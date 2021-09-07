<?php
require_once "connection.php";

if(isset($_POST["submit"])){
	// Variable declaration
	$Name = htmlspecialchars($_POST["Name"]);
	$username = htmlspecialchars($_POST["username"]);
	$password = htmlspecialchars($_POST["password"]);
	$password = md5($password);
	$location = htmlspecialchars($_POST["location"]);
	$email = htmlspecialchars($_POST["email"]);
	

	$sql = "INSERT INTO aid_institution (Name, username, password, location, email) VALUES ('$Name', '$username', '$password', '$location', '$email')";


	if ($conn->query($sql) === TRUE) {
		//echo "New record created successfully";
		@header("Location: admin.php");
		exit();
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
?>