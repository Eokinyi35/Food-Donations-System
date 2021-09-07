<?php
session_start();
    $ID = $_SESSION['assoc'];
    if (!isset($_SESSION["assoc"])) {
    // header('Location: login.php');
}
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

<body id="page-top" class="index">

    <!-- Navigation -->
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
                <a class="navbar-brand page-scroll" href="#page-top">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="#portfolio">donate</a>
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

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Make a Difference</div>
                <div class="intro-heading">I-Donate</div>
            </div>
        </div>
    </header>

   

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Donate</h2>
                    <h3 class="section-subheading text-muted">Put a smile on a face.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                           
                        </div>
                        <img src="img/portfolio/default.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Campaigns</h4>
                        <p class="text-muted">Make a Difference</p>
                    </div>

 
                             
                </div>
            </div>
        </div>
    </section>

   
   

    <!-- 
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>
    
   Clients Aside -->

    <!--footer section-->
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

    <!-- Portfolio Modals -->
    
              <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-content">
                          <div class="close-modal" data-dismiss="modal">
                              <div class="lr">
                                  <div class="rl">
                                  </div>
                              </div>
                          </div>
                          <div class="container">
                              <div class="row">
                                  <div class="col-lg-8 col-lg-offset-2">
                                      <div class="modal-body">
                                          <!-- Project Details Go Here -->

                                          <h2>Campaigns</h2>

                                         <a href="donate.php">
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
                                           $sql = mysqli_query($conn,"SELECT * FROM donationscampaigns");
                                          if(!empty($sql))
                                          {
                                            $row = mysqli_num_rows($sql);
                                            if($row > 0 ) {
                                              // output data of each row
                                                while($rew = $sql->fetch_assoc()) {
                                                  echo '<a href=donate.php?camp_id=' . $rew['campaign_id'] . '> '; 
                                                  echo '<td><img src = "img/'.$rew["image"].'"width = "700px" height = "500px"/></td>'."<br>";
                                                  echo  "Organization: " . $rew["Name"]."<br>";
                                                  echo  "Campaign: " . $rew["campaign_name"]."<br>";
                                                  echo "Details: " . $rew["campaign_description"]."<br>";
                                                 
                                                  echo ""."<br>";
                                                  echo ""."<br>";
                                                  echo '</a>';    
                                                }
                                            }
                                          } else {
                                              echo "0 results";
                                          }
                                          $conn->close();


                                          ?>
                                          </a>
                                          <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i><a href = 'body.php'>Back</a></button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    

    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>
