<?php
require_once 'connection.php';
// session_start();
//update password
if(isset($_POST["update"])){
  $email = htmlspecialchars($_POST["email"]);
  $password = md5($_POST["password"]);
  
  
  $sql = "UPDATE household SET password='$password' WHERE email='$email' ";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    @header("Location: login.php");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>