<?php
session_start();
$ID = $_SESSION["assoc"];
// $campaign_id = $_GET['camp_id'];
require_once "connection.php";
//echo $ID;		
if(isset($_POST	["submit"])){
	// $Name = 'WFO';		
	// $sql1 = "SELECT user_id FROM household WHERE username = '$ID'
	// 		UNION 
	// 		SELECT campaign_id FROM donationscampaigns WHERE Name = '$Name'";

	// 		$result = $conn->query($sql1);

	$FoodType = htmlspecialchars($_POST["FoodType"]);
	$user_id = $ID;
	$donation_description = htmlspecialchars($_POST["donation_description"]);
	$donation_location = htmlspecialchars($_POST["donation_location"]);
	$donation_quantity = htmlspecialchars($_POST["donation_quantity"]);
	$expiry_date = htmlspecialchars($_POST["expiry_date"]);
	//$map = htmlspecialchars($_POST["map"]);
	$lat = htmlspecialchars($_POST["lat"]);
	$lng = htmlspecialchars($_POST["lng"]);
	$campaign_id = $_POST["camp_id"];

	echo $lat;
	echo "</br>";
	echo $lng;

	   if (move_uploaded_file($_FILES["image"]["tmp_name"], "img/" . $_FILES["image"]["name"])){
     $image = basename($_FILES["image"]["name"]);

   }else{
  	
	$image = "li2.jpg";
   }

   $sql_em = "SELECT * FROM household WHERE `user_id`='$ID'";
   $sql_em_result = mysqli_query($conn, $sql_em);

   while ($row=mysqli_fetch_array($sql_em_result)) {
   	$email = $row['email'];
   	$phoneNo = $row['phoneNo'];
   }
	
	//Query inserting data into the table
	$sql = "INSERT INTO donations (user_id , donor_email, donor_phone, image, FoodType, donation_description,donation_location, donation_quantity, donation_time, campaign_id, lat, lng, expiry_date) VALUES ('$user_id', '$email', '$phoneNo', '$image', '$FoodType', '$donation_description', '$donation_location', '$donation_quantity',now(), '$campaign_id', '$lat', '$lng', '$expiry_date')";
	// echo "$sql";die;
	//Query to verify new record was created successfully in the table
	if ($conn->query($sql) === TRUE) {
		 echo "<a href='body.php'>back</a>"; 
		//@header("Location: body.php");
		exit();
	} else {
		echo "Error: " . "<br>" . $conn->error;
	}

}
  	echo "other";

?>