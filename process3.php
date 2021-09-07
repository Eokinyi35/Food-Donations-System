<?php
require_once "connection.php";
session_start();
$ID = $_SESSION["assoc"];

if(isset($_POST["Submit"])){
  // Variable declaration
  $donation_name = htmlspecialchars($_POST["donation_name"]);
  $donation_description = htmlspecialchars($_POST["donation_description"]);
  $donation_location = htmlspecialchars($_POST["donation_location"]);
  $donation_quantity = htmlspecialchars($_POST["donation_quantity"]);
  $donation_name = htmlspecialchars($_POST["donation_name"]);
  $user_id = $ID;

    if (move_uploaded_file($_FILES["image"]["tmp_name"], "img/" . $_FILES["image"]["name"])){
    $image = basename($_FILES["image"]["name"]);
  }else{
$image = "li2.jpg";
  }
  
  
  
  $sql = "UPDATE `donations` SET  `image` = '$image', `donation_description` = '$donation_description', `donation_location` = '$donation_location', `donation_quantity` = '$donation_quantity', `donation_name` = '$donation_name' WHERE `user_id` = '$user_id'";
  
  if ($conn->query($sql) === TRUE) {
        
    echo "<script>alert('Image uploaded Succesfully.');</script>";
    echo "<script>window.close(); window.location = \"body.php\";</script>";
      exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>