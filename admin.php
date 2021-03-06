<!DOCTYPE html>
<html>
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
                        <a class="page-scroll" href="reports.php">Reports</a>
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

<body>
    <section id="sign up" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Admin</h2>
                    <h3 class="section-subheading text-muted">you can make a change.</h3>
                </div>
            </div>
            <div class="row">
                <section class="mobile-app theme_background_color" id="sign up">
      <div class="container">
            <form method="post"  action="insert2.php">
            <div style="position:absolute; top:200px; left:100px; width:400px; height:400px;">
          <div class="col-lg-12 text-center"> 
          <h3>Institutions Registration</h3>
                <label><font color="black">Name:</font></label> 
                <input type="name" name="Name" placeholder="Name"  class="form-control" style = "width: 200px; left:660px;"/><br/>
                <label><font color="black">Username:</font></label> 
                <input type="name" name="username" placeholder="username"  class="form-control" style = "width: 200px; left:660px;"/><br/>
                <label><font color="black">Password:</font></label><br/>
                <input type="password" name="password" placeholder="password"  class="form-control" style = "width: 200px;"/><br/>
                <label><font color="black">Location address:</font></label> 
                <input type="name" name="location" placeholder="location"  class="form-control" style = "width: 200px; left:660px;"/><br/>
                <label><font color="black">Email:</font></label><br/>
                <input type="email" name="email" placeholder="email"  class="form-control" style = "width: 200px;"/><br/>
                        </div>
                        <input type="submit" name="submit" value="Create account" class="btn btn-style blue"/><br/>
                        </div>
                 </form>
                        </div>
                  </section>


             <form method="post"  action="insert4.php">
            <div style="position:absolute; top:250px; left:900px; width:400px; height:400px;">
          <div class="col-lg-12 text-center"> 
          <h3>Dispatch center Registration</h3>
                <label><font color="black">Organization Name:</font></label> 
                <input type="name" name="organizationname" placeholder="Organization Name"  class="form-control" style = "width: 200px; left:660px;"/><br/>
                <label><font color="black">Phone Number:</font></label> 
                <input type="number" name="phoneno" placeholder="Phone no"  class="form-control" style = "width: 200px; left:660px;"/><br/>
                <label><font color="black">Email:</font></label><br/>
                <input type="email" name="email" placeholder="email"  class="form-control" style = "width: 200px;"/><br/>
                <label><font color="black">Location address:</font></label> 
                <input type="name" name="location" placeholder="location"  class="form-control" style = "width: 200px; left:660px;"/><br/>
                
                        </div>
                        <input type="submit" name="submit" value="Create center" class="btn btn-style blue"/><br/>
                        </div>
                 </form>
                        </div>
                  </section>
            
        </div>
    </section>

<!-- main feed Modal  -->
    
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