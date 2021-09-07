<?php
session_start();
    $ID = $_SESSION['assoc'];
    if (!isset($_SESSION["assoc"])) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>

<body>
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

                                         <a href="donate.php" class="portfolio-link" data-toggle="modal">
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
                                                  echo '<td><img src = "img/'.$rew["image"].'"width = "700px" height = "500px"/></td>'."<br>";
                                                  echo  "Organization: " . $rew["Name"]."<br>";
                                                  echo  "Campaign: " . $rew["campaign_name"]."<br>";
                                                  echo "Details: " . $rew["campaign_description"]."<br>";
                                                 
                                                  echo ""."<br>";
                                                  echo ""."<br>";

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
</body>
</html>