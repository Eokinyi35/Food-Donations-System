<?php
session_start();
error_reporting(0);

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "is11";
// Create connection
$conn = new mysqli($servername, $username, $pass, $dbname );

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

    ?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>I-Donate | Admin Dashboard</title>

	
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	
	<link rel="stylesheet" href="css/bootstrap-social.css">
	
	<link rel="stylesheet" href="css/bootstrap-select.css">
	
	<link rel="stylesheet" href="css/fileinput.min.css">
	
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php include('includes/header.php');?>

	<div class="ts-main-content">
<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Dashboard</h2>
						
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
<?php 
$qry_users="SELECT COUNT(*) as num FROM household";
$total_users = mysqli_fetch_array(mysqli_query($conn,$qry_users));
$total_users = $total_users['num'];
?>
													<div class="stat-panel-number h1 "><?php echo $total_users;?></div>
													<div class="stat-panel-title text-uppercase">Donors</div>
												</div>
											</div>
											<a href="donor.php" class="block-anchor panel-footer">Full Details <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
												<?php 
$qry_Dry="SELECT COUNT(*) as num FROM donations WHERE FoodType = 'Dry'";
$total_dry = mysqli_fetch_array(mysqli_query($conn,$qry_Dry));
$total_dry = $total_dry['num'];
?>
													<div class="stat-panel-number h1 "><?php echo $total_dry;?></div>
													<div class="stat-panel-title text-uppercase">Dry food Donations</div>
												</div>
											</div>
											<a href="drydonations.php" class="block-anchor panel-footer text-center">Full Details &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
												<?php 
$qry_Processed="SELECT COUNT(*) as num FROM donations WHERE FoodType = 'Processed'";
$total_processed = mysqli_fetch_array(mysqli_query($conn,$qry_Processed));
$total_processed = $total_processed['num'];
?>
													<div class="stat-panel-number h1 "><?php echo $total_processed;?></div>
													<div class="stat-panel-title text-uppercase">Processed food Donations</div>
												</div>
											</div>
											<a href="processeddonations.php" class="block-anchor panel-footer text-center">Full Details &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
												<?php 
$qry_Perishable="SELECT COUNT(*) as num FROM donations WHERE FoodType = 'Perishable'";
$total_perishable = mysqli_fetch_array(mysqli_query($conn,$qry_Perishable));
$total_perishable = $total_perishable['num'];
?>
													<div class="stat-panel-number h1 "><?php echo $total_perishable;?></div>
													<div class="stat-panel-title text-uppercase">Perishable food Donations</div>
												</div>
											</div>
											<a href="perishabledonations.php" class="block-anchor panel-footer text-center">Full Details &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
												<?php 
$qry_donations="SELECT COUNT(*) as num FROM donations";
$total_donations = mysqli_fetch_array(mysqli_query($conn,$qry_donations));
$total_donations = $total_donations['num'];
?>
													<div class="stat-panel-number h1 "><?php echo $total_donations;?></div>
													<div class="stat-panel-title text-uppercase">Total Donations</div>
												</div>
											</div>
											<a href="totaldonations.php" class="block-anchor panel-footer text-center">Full Details &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">
												<?php 
$qry_dispatch="SELECT COUNT(*) as num FROM dispatch";
$total_dispatch = mysqli_fetch_array(mysqli_query($conn,$qry_dispatch));
$total_dispatch = $total_dispatch['num'];
?>
													<div class="stat-panel-number h1 "><?php echo $total_dispatch;?></div>
													<div class="stat-panel-title text-uppercase">Total Donations Dispatched</div>
												</div>
											</div>
											<a href="dispatched.php" class="block-anchor panel-footer text-center">Full Details &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
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
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>












			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
	
	<script>
		
	window.onload = function(){
    
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		}); 
		
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script>
</body>
</html>