<?php
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
 //echo "Connected Successfully to ". $dbname;
?>