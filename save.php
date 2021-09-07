
<?php
session_start();
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

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = mysqli_query($conn,"SELECT * FROM household WHERE email = '$email' and password = '$password'");
    if(!empty($sql))
    {
	    $row = mysqli_num_rows($sql);
	    if($row > 0 )
	    {
// $row = mysql_result(result, row)ult($sql, 1);
// echo $row;
	    	if($currentRow = mysqli_fetch_assoc($sql)) {
	    		$_SESSION["assoc"] = $currentRow['user_id'];
	    	}

header('Location: body.php');
	      // echo "<script>window.location='body.php';</script>";
	      // echo "<script>window.close(); window.location = \"body.php\";</script>";
	    }else {
	    	//echo "Santa Nothing";
	        echo "<script>alert('Login unsuccessful.');</script>";
	        echo "<script>window.close(); window.location = \"login.php\";</script>";
	    }
	}
	    	


}
}

?>