<?php
require_once "connection.php";
session_start();
$ID = $_SESSION["assoc"];
echo $ID;

if(isset($_POST["Submit"])){
  // Variable declaration
  $campaign_name = htmlspecialchars($_POST["campaign_name"]);
  $campaign_description = htmlspecialchars($_POST["campaign_description"]);


    if (move_uploaded_file($_FILES["image"]["tmp_name"], "img/" . $_FILES["image"]["name"])){
    $image = basename($_FILES["image"]["name"]);
  }else{
$image = "li2.jpg";
  }
  

  
  $sql = "INSERT INTO `donationscampaigns` (`campaign_name`, `campaign_description`, `Name`, `image`) VALUES ('$campaign_name', '$campaign_description', '$ID', '$image')";

  if ($conn->query($sql) === TRUE) {
        
    echo "<script>alert('Image uploaded Succesfully.');</script>";
    echo "<script>window.close(); window.location = \"campaigns.php\";</script>";
      exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>