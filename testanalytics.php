<?php
session_start();
error_reporting(0);
	$servername = "localhost";
	$serveruser = "root";
	$serverpass = "";
	$dbname = "is11";

	$conn = new mysqli($servername, $serveruser, $serverpass, $dbname);

	if ($conn->connect_error){
		die("Connection Failed: ". $conn->connect_error);
	}
?>
<?php 
$qry_dry="SELECT COUNT(*) as num FROM donations WHERE FoodType = 'Dry'";
$total_dry = mysqli_fetch_array(mysqli_query($conn,$qry_dry));
$total_dry = $total_dry['num'];
?>
<?php 
$qry_processed="SELECT COUNT(*) as num FROM donations WHERE FoodType = 'Processed'";
$total_processed= mysqli_fetch_array(mysqli_query($conn,$qry_processed));
$total_processed = $total_processed['num'];
?>
<?php 
$qry_perishable="SELECT COUNT(*) as num FROM donations WHERE FoodType = 'Perishable'";
$total_perishable= mysqli_fetch_array(mysqli_query($conn,$qry_perishable));
$total_perishable = $total_perishable['num'];
?>
<!DOCTYPE html>
<html>


<body>

<h1>My Web Page</h1>

<div id="piechart"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
	var dry_donations= <?php echo $total_dry; ?>;
		
		var processed_donations= <?php echo $total_processed; ?>;
		var perishable_donations= <?php echo $total_perishable; ?>;
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
 ['Dry Feed', dry_donations],
  ['Processed Feed', processed_donations],
  ['Perishable Feed', perishable_donations]
  
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Donations', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
</body>
<html>