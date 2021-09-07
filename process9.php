<?php
require_once "connection.php";
session_start();
$ID = $_SESSION["assoc"];

if(isset($_POST["Submit"])){
  // Variable declaration
  $campaign_name = htmlspecialchars($_POST["campaign_name"]);
  $campaign_description = htmlspecialchars($_POST["campaign_description"]);

  $user_id = $ID;

    if (move_uploaded_file($_FILES["image"]["tmp_name"], "img/" . $_FILES["image"]["name"])){
    $image = basename($_FILES["image"]["name"]);
  }else{
$image = "li2.jpg";
  }
  
  
  
  $sql = "UPDATE `donationscampaigns` SET  `image` = '$image', `campaign_description` = '$campaign_description' WHERE `Name` = '$ID' and `campaign_name` = '$campaign_name'";
  
  if ($conn->query($sql) === TRUE) {
        
    echo "<script>alert('Campaign updated Succesfully.');</script>";
    echo "<script>window.close(); window.location = \"campaigns.php\";</script>";
      exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>