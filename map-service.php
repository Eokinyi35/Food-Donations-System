<?php

$servername = "localhost";
$serveruser = "root";
$serverpass = "";
$dbname = "is11";

$conn = new mysqli($servername, $serveruser, $serverpass, $dbname);


require_once "connection.php";


if ($_POST['action'] == 'savepoint') { 
  $name = $_POST['name']; 
  if(empty($name)) { 
    fail('Please enter a name.'); 
    $lat = htmlspecialchars($_POST["lat"]);
	$lng = htmlspecialchars($_POST["lng"]);
  } 
}
$sql =mysqli_query($conn,"INSERT INTO donations SET name='$_POST[name]', lat='$lat', lng='$lng'"); 
if(!empty($sql))
{
$row = mysqli_num_rows($sql); 
if ($row > 0 ) { 
  success(array('lat' =>$_POST['lat'], 'lng' =>$_POST['lng'], 'name' =>$name)); 
} else { 
  fail('Failed to add point.'); 
}
}
function success($data) { 
  die(json_encode(array('status' =>'success', 'data' =>$data))); 
}
function fail($message) { 
  die(json_encode(array('status' => 'fail', 'message' => $message))); 
}

if ($_POST['action'] == 'listpoints') { 
  $query ="SELECT * FROM donations"; 
  $result = map_query($query); 
  $points = array();
  while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) { 
    array_push($points, array('name' =>$row['name'], 'lat' =>$row['lat'], 'lng' =>$row['lng'])); 
  } 
  echo json_encode(array("Locations"=>$points)); 
  exit; 
}

?>