<?php
// Start the session
session_start();
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
                <a class="navbar-brand page-scroll" href="#page-top">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                     <li>
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
                    <h2 class="section-heading">Donation campaign</h2>
                    <h3 class="section-subheading text-muted">Make a difference.</h3>
                </div>
            </div>
            <div class="row">
             <form action="process.php"  method="POST" enctype ="multipart/form-data">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5 class="section-heading">Upload campaign poster</h5>
                                     <input type = "file" name = "image" placeholder = "image" maxlength = "200" style = "width: 440px;" required = "" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Campaign name *" name = "campaign_name" id="campaign_name" required data-validation-required-message="Please enter campaign name .">
                                    <p class="help-block text-danger"></p>
                                </div>
                               
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Campaign Description *" name = "campaign_description" id="campaign_description" required data-validation-required-message="description."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" name = "Submit" class="btn btn-xl">submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                <table align="center" >
                                        <tr>
                                          <td colspan="2" class="col-md-12"><h2 class="section-heading">Delete Donation Campaign</h2><br/></td>
                                        </tr>
                                        <tr>
                                        
                                          <td class="col-md-6">
                                            <form action="process8.php"  method="POST" enctype ="multipart/form-data">
                                              <div class="well">

                                                <label><font color="black">Campaign Name:</font></label><br/>
                                                <input type = "text" name = "campaign_name" placeholder = "campaign name" maxlength = "200" style = "width: 440px;" required = "" /><br/>
                                                
                                              
                                                <input type = "reset" value = "Clear" class="poo btn"/>
                                                <input type = "submit" name = "Submit" value = "Submit" class="poo btn"/>
                                                </div>
                                            </form>
                                          </td>  
                                        </tr>
                     </table>
                </div>
                <div class="row">
                <table align="center" >
                                        <tr>
                                          <td colspan="2" class="col-md-12"><h2 class="section-heading">Update Donation Campaign</h2><br/></td>
                                        </tr>
                                        <tr>
                                        
                                          <td class="col-md-6">
                                            <form action="process9.php"  method="POST" enctype ="multipart/form-data">
                                              <div class="well">
                                                
                                                <label><font color="black">Campaign Poster:</font></label><br/>
                                                 <input type = "file" name = "image" placeholder = "image" maxlength = "200" style = "width: 440px;" required = "" />

                                                <label><font color="black">Campaign Name:</font></label><br/>
                                                <input type = "text" name = "campaign_name" placeholder = "campaign name" maxlength = "200" style = "width: 440px;" required = "" /><br/>
                                                
                                                 <label><font color="black">Campaign Description:</font></label><br/>
                                                 <textarea class="form-control" placeholder="Campaign Description *" name = "campaign_description" id="campaign_description" required data-validation-required-message="description."></textarea>
                                              
                                                <input type = "reset" value = "Clear" class="poo btn"/>
                                                <input type = "submit" name = "Submit" value = "Submit" class="poo btn"/>
                                                </div>
                                            </form>
                                          </td>  
                                        </tr>
                     </table>
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