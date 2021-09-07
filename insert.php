<?php
require_once "connection.php";

if(isset($_POST["submit"])){
	// Variable declaration
	$FName = htmlspecialchars($_POST["FName"]);
	$LName = htmlspecialchars($_POST["LName"]);
	$username = htmlspecialchars($_POST["username"]);
	$email = htmlspecialchars($_POST["email"]);
	$phoneNo = htmlspecialchars($_POST["phoneNo"]);
	$password = htmlspecialchars($_POST["password"]);
	$hash_password = md5($password);
	$location = htmlspecialchars($_POST["location"]);
	

	$sql0 = mysqli_query($conn,"SELECT * FROM household WHERE email = '$email'");
    if(!empty($sql0))
    {
	    $row = mysqli_num_rows($sql0);
	    if($row > 0 )
	    {
		echo '<script>alert("email already exists")</script>';
		echo "<script>window.close(); window.location = \"signup.php\";</script>";
		// @header("Location: signup.php");
		// exit();
		}else{
			$sql = "INSERT INTO household (FName, LName, username, email, phoneNo, password, location) VALUES ('$FName', '$LName', '$username', '$email', '$phoneNo', '$hash_password', '$location')";


			if ($conn->query($sql) === TRUE) {
				echo '<script>alert("signup Successful")</script>';
				echo "<script>window.close(); window.location = \"login.php\";</script>";
				//@header("Location: login.php");
				exit();
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
	} else {
		echo "Error: " . $sql0 . "<br>" . $conn->error;
	}
}
?>