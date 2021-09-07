<?php
// include("connection.php");
// Declaring database constants
$servername = "localhost";
$serveruser = "root";
$serverpass = "";
$dbname = "is11";

//Create the database connection
$conn = new mysqli($servername, $serveruser, $serverpass, $dbname);

// Check connection
if ($conn->connect_error){
die("Connection Failed: ". $conn->connect_error);
} 
else{
if(isset($_POST['submit']))
{

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = mysqli_query($conn,"SELECT * FROM aid_institution WHERE username = '$username' and password = '$password'");
    if(!empty($sql))
    {
	    $row = mysqli_num_rows($sql);
	    if($row > 0 )
	    {
	    	echo "Santa Maria";
	      session_start();
	       if($_SESSION["assoc"] = $username){
	      header('Location: campaigns.php');}// echo "<script>window.location='body.php';</script>";
	      // echo "<script>window.close(); window.location = \"body.php\";</script>";
	    }else {
	    	//echo "Santa Nothing";
	        echo "<script>alert('Login unsuccessful.');</script>";
	        echo "<script>window.close(); window.location = \"loginInst.php\";</script>";
	    }
	}
	    	


}
}

?>