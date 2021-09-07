<!Doctype html>
<html>
<head>
  <title>Log In</title>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="icon" type="image/png" href="images/9.png" /> 
</head>
<body class="bbb">
<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header" >
      <a class="" href="index.html"><img src="img/Ab_food_06.jpg" height="50px" width="150px" class="img-responsive"/></a>
    </div>
    <div class="collapse navbar-collapse" id="inverseNavbar1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php" value="Sign Up"> <button class="btn poo">Sign Up</button></a></li>
      </ul>
    </div>
  </div>
 </nav>
  <div class="container jumbotron ">
    <table align="center" >
    <tr>
      <td colspan="2" class="col-md-12"><h2 class="text-center zoo">Sign in to continue<br/> -to-<br/> Easy Shopper</h2><br/></td>
    </tr>
    <tr>
      <td>    
    </td>
      <td class="well">
        <form action="process7.php" method="POST">
          <table align="center">
            <?php 
                  require_once "connection.php";
                  if (isset($_POST['verify'])){

                  $email = addslashes($_POST["email"]);
                  $sql_0 = "SELECT email  FROM household WHERE email ='$email'";
                  
                  
                  $result = $conn->query($sql_0);

                  if ($result->num_rows > 0) {
                  // output data of each row
                  // Printing the posted data
                    while($row = $result->fetch_assoc()) {
                      echo '<form action"process7.php" method="POST">' ;
                      echo '<div><input type="email" name="email" value= '.$row["email"].' readonly class="form-control"/></div><br/>';
                      echo '<div><input type="password" name="password" id="password" placeholder="Password"  class="form-control"/></div><br/>';
                      echo '<div><input type="password" name="password" id="confirm_password" placeholder="Confirm Password"  class="form-control"/></div><br/>';
                      echo '<div><input type = "submit" name = "update" value = "Update" class="poo btn btn-block"/></div></form>';
                    
                    }
                  } else{
                    echo "<script>alert('Verification failed. The Email address does not exist.');</script>";
                    echo "<script>alert('Please try again.');</script>";
                    echo "<script>window.close(); window.location = \"verify.php\";</script>";
                    session_destroy();
                    exit();
                  }
                  }
                  
            ?>
          </table>
          
        </form>

      </td>
    </tr>
  </table>
</body>
</html>