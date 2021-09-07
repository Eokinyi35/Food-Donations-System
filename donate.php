<?php
// Start the session
session_start();
define("API_KEY","AIzaSyBFbrkl0qAPg1--Ol7L9XNs5K_7HrdLC8g")
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>I-Donate</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>
 #map {
   width: 100%;
   height: 400px;
   background-color: grey;
 }
 #btnAction {
    background: #3878c7;
    padding: 10px 40px;
    border: #3672bb 1px solid;
    border-radius: 2px;
    color: #FFF;
    font-size: 0.9em;
    cursor:pointer;
    display:block;
}
#btnAction:disabled {
    background: #6c99d2;
}
</style>
</head>
<body>

 <section id="contact">
  <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="body.php">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    
                     <li>
                        <a  class="page-scroll" href="logout.php">logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Donate</h2>
                    <h3 class="section-subheading text-muted">Make a difference.</h3>
                </div>
            </div>
            <div class="row">
             <form id ="ContactForm" action="process2.php?camp_id=<?php echo $_GET['camp_id'] ?>"  method="POST" enctype ="multipart/form-data">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <h5 class="section-heading">Upload donations image</h5>
                                     <input type = "file" name = "image" placeholder = "image" maxlength = "200" style = "width: 440px;" required = "" />
                                </div>
                                <div>
                                    <select name="FoodType" id="FoodType">
                                      <option value="Processed">Processed Food</option>
                                      <option value="Dry">Dry Food</option>
                                      <option value="Perishable">Perishable Food</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                <h5 class="section-heading">Expiry Date</h5>
                                    <input type="date" class="form-control" placeholder="Donation Expiry Date *" name = "expiry_date" id="expiry_date" required data-validation-required-message="Please enter donation Expiry Date.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Donation quantity *" name = "donation_quantity" id="donation_quantity" required data-validation-required-message="Please enter donation quantity.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="container">
                                    <h5 class="section-heading">My Location</h5>
                                    <div id="button-layer"><button id="btnAction" name="map" onClick="locate()">My Current Location</button></div>
                                    <div id="map"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="donation description *" name = "donation_description" id="donation_description" required data-validation-required-message="description."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Donor location *" name = "donation_location" id="donation_location" required data-validation-required-message="Please enter your location.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <?php 
                                    $camp_id = 0;
                                    if(isset($_GET['camp_id'])){
                                        $camp_id = $_GET['camp_id'];
                                    }



                                ?>
                                <input type="hidden" id="campaign_id" value="<?php echo $camp_id; ?>"></input>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" id="sub" name = "submit" class="btn btn-xl">Donate</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy;Eokinyi35 2018</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/okinyi_emmanuel"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/Emmanuel Okinyi/?pnref=lhc"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/eokinyi/"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>
<script type="text/javascript" src="js/googlemaps.js"></script>
    <script
                                        src="https://maps.googleapis.com/maps/api/js?key=<?php echo API_KEY; ?>&callback=initMap"
                                        async defer></script>
                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                                    <script type="text/javascript">
                                    var map;
                                    var mylong=null;var mylat = null;
                                    function initMap() {
                                        var mapLayer = document.getElementById("map");
                                        var centerCoordinates = new google.maps.LatLng(37.6, -95.665);
                                        var defaultOptions = { center: centerCoordinates, zoom: 20 }

                                        map = new google.maps.Map(mapLayer, defaultOptions);
                                    }
                                    $("#sub").on('click',function(e){
                                        e.preventDefault();
                                        var donation_quantity = $("#donation_quantity").val();
                                        var expiry_date = $("#expiry_date").val();
                                        var donation_description = $("#donation_description").val();
                                        var donation_location = $("#donation_location").val();
                                        var image = $("#image").val();
                                        var FoodType = $("#FoodType").val();
                                        var currentLatitude = mylat;
                                        var currentLongitude = mylong;
                                        var campaign_id = $("#campaign_id").val(); 
                                        $.ajax({
                                              type: 'POST',
                                              url: "process2.php",
                                              data: {
                                                lat: currentLatitude,
                                                lng: currentLongitude,
                                                expiry_date: expiry_date,
                                                donation_quantity: donation_quantity,
                                                donation_description: donation_description,
                                                donation_location: donation_location,
                                                submit: "True",
                                                camp_id: campaign_id,
                                                FoodType: FoodType,
                                                image: image
                                                
                                              },
                                              success: function(data) {
                                                console.log(data)
                                              }
                                        });
                                    });
                                    function locate(){
                                        document.getElementById("btnAction").disabled = true;
                                        document.getElementById("btnAction").innerHTML = "Processing...";
                                        if ("geolocation" in navigator){
                                            navigator.geolocation.getCurrentPosition(function(position){ 
                                                var currentLatitude = position.coords.latitude;
                                                var currentLongitude = position.coords.longitude;
                                                mylong = currentLongitude;
                                                mylat = currentLatitude;

                                                var infoWindowHTML = "Latitude: " + currentLatitude + "<br>Longitude: " + currentLongitude;
                                                var infoWindow = new google.maps.InfoWindow({map: map, content: infoWindowHTML});
                                                var currentLocation = { lat: currentLatitude, lng: currentLongitude };
                                                infoWindow.setPosition(currentLocation);
                                                document.getElementById("btnAction").style.display = 'none';
                                                 
                                            });
                                        
                                               
                                               
                                                 }
                                    }
                                                 //console.log("The Longitude and Latitude is "+mylong +" "+mylat)

                                    </script>
 <script src="js/agency.js"></script>
<!--<script src="js/submit.js"></script>-->

</body>
</html>