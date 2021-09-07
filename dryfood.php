<?php
require_once "connection.php";
session_start();
    $ID = $_SESSION['assoc'];
    if (!isset($_SESSION["assoc"])) {
    header('Location: login.php');
}

$sql1 = "SELECT * FROM dispatch_center";
$sql_result = mysqli_query($conn, $sql1); 

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <a class="navbar-brand page-scroll" href="campaigns.php">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                     <!-- <li>
                        <a class="page-scroll" href="dryfeed.php">donor Locations</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="dryfood.php">Dry foods</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="processedfeed.php">Processed foods</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="perishablefeed.php">Perishable foods</a>
                    </li> -->
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
                    <h2 class="section-heading">Dry Foods</h2>
                    <h3 class="section-subheading text-muted">Make a difference.</h3>
                </div>
            </div>
            <div class="row">
             <form action="cart.php" method="POST" enctype="multipart/data">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="container">
                              <div class="row">
                                  <div class="col-lg-8 col-lg-offset-2">
                                      <div class="modal-body">
                                          <!-- Project Details Go Here -->

                                        
                                         <div class="portfolio-hover">
                                          <div class="portfolio-hover-content">
                                              <i class="fa fa-plus fa-3x"></i>
                                          </div>
                                         
                                         </div>

                                          <?php
 
                                          $servername = "localhost";
                                          $serveruser = "root";
                                          $serverpass = "";
                                          $dbname = "is11";

                                          $conn = new mysqli($servername, $serveruser, $serverpass, $dbname);

                                          
                                          //$ID = $_SESSION['assoc'];

                                          require_once "connection.php";
                                           $sql = mysqli_query($conn,"SELECT * FROM donations WHERE FoodType ='Dry' AND status = '1'");
                                          if(!empty($sql))
                                          {
                                            $row = mysqli_num_rows($sql);
                                            if($row > 0 ) {
                                              // output data of each row
                                                while($rew = $sql->fetch_assoc()) {
                                                  
                  

                                          ?>

                                          <form action="cart.php" method="POST" enctype="multipart/data">
                                          <div style="background-color: #f1f1f1 border-radius: 5px; padding: 16px;" align="center">
                                          <div hidden="">
                                          <img src="<?php echo $rew["image"];?>"/><br/>
                                          <input type="number" name="donation_id" value='<?php echo $rew["donation_id"];?>' readonly class="form-control" hidden/>
                                          <input type="number" name="institution_id" value='<?php echo $rew[$ID];?>' readonly class="form-control" hidden/>
                                          <input type="number" name="donation_quantity" value='<?php echo $rew["donation_quantity"];?>' readonly class="form-control" hidden=""/>
                                          <input type="date" name="expiry_date" value='<?php echo $rew["expiry_date"];?>' readonly class="form-control" hidden=""/>
                                          <input type="text" name="donation_description" value='<?php echo $rew["donation_description"];?>' readonly class="form-control" hidden=""/>
                                          <input type="text" name="donation_location" value='<?php echo $rew["donation_location"];?>' readonly class="form-control" hidden=""/>
                                          <input type="text" name="FoodType" value='<?php echo $rew["FoodType"];?>' readonly class="form-control" hidden=""/>
                                          <input type="email" name="donor_email" value='<?php echo $rew["donor_email"];?>' readonly class="form-control" hidden=""/>
                                          <input type="datetime" name="donation_time" value='<?php echo $rew["donation_time"];?>' readonly class="form-control" hidden=""/>
                                          </div>
                                          <h4 class="section-heading">Description: <?php echo $rew["donation_description"];?></h4>
                                          <h4 class="section-heading">Donation Quantity: <?php echo $rew["donation_quantity"];?></h4>
                                          <h4 class="section-heading">Donor Location: <?php echo $rew["donation_location"];?></h4>
                                          <select name="dispatchcenterId">
                                          <option value="">select dispatch center</option>
                                            <?php
                                            while ($row = mysqli_fetch_array($sql_result)) {
                                            ?>
                                            <option value="<?php echo $row['dispatchcenterId'];?>"><?php echo $row['organizationname'];?></option>
                                            <?php
                                            }
                                            ?>
                                          </select>
                                          <h4 hidden=""><?php echo $rew["donation_id"];?></h4>
                                          <h4 hidden=""><?php echo $rew["donation_time"];?></h4>
                                          <h4 hidden=""><?php echo $rew["FoodType"];?></h4>
                                          <input type="submit" name="add_to_cart" style="margin-top: 5px" value="allocate"/>
                                          </div>
                                          </form>
                                          <?php
                                            
                                                }
                                              }
                                            }
                                          ?>
                                    
                                          <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i><a href = 'campaigns.php'>Back</a></button>
                                      </div>
                                  </div>
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

 <script src="js/agency.js"></script>


</body>
</html>