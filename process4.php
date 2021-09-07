<?php
require_once "connection.php";
session_start();
$ID = $_SESSION["assoc"];

//$conn=mysql_connect('localhost','id2377604_apiproject','') or die ('Failed to connect'.mysql_error());
//$db=mysql_select_db('id2377604_apiproject') or die('Failed to connect to db');

//if (isset($_GET["del"])){
//$u_id = $_GET["del"];
$donation_name = htmlspecialchars($_POST['donation_name']);
$user_id = $ID;

$del_art = "DELETE FROM donations WHERE donation_name = '$donation_name' AND user_id = '$ID'";
  
 // if ($conn->query($del_art) === TRUE) {
    // echo "New record created successfully";
 //   @header("Location: ownerinput.php");
//    exit();
//  }
//  else{
//    echo 'not deleted';
//}
	 //$result=mysql_query($del_art);

	 if($conn->query($del_art) === TRUE)
	 {
	 	echo "<script>alert('Donation deleted Succesfully.');</script>";
        echo "<script>window.close(); window.location = \"body.php\";</script>";
      exit();
	 }else
	 {
	 	echo "<script>alert('failed to delete.');</script>";
      echo "<script>window.close(); window.location = \"body.php\";</script>";
      exit();
	 }
?>