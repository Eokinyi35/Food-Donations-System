<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';
// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';

$ID = $_SESSION["assoc"];
require_once "connection.php";
if (isset($_POST["add_to_cart"])){
	$institution_id = $ID;
	$donation_id=htmlspecialchars($_POST["donation_id"]);
	$donation_quantity=htmlspecialchars($_POST["donation_quantity"]);
	$expiry_date=htmlspecialchars($_POST["expiry_date"]);
	$institution_id=htmlspecialchars($_POST["institution_id"]);
	$donation_location=htmlspecialchars($_POST["donation_location"]);
	$dispatchcenterId=htmlspecialchars($_POST["dispatchcenterId"]);
	$FoodType=htmlspecialchars($_POST["FoodType"]);
	$donor_email=htmlspecialchars($_POST["donor_email"]);
	$donation_description=htmlspecialchars($_POST["donation_description"]);
	$name = htmlspecialchars("I-Donate");

		$mail = new PHPMailer(true);                              // Passing true enables exceptions
          try {
              //Server settings
              //Enable SMTP debugging.
              // $mail->SMTPDebug = 2;                                // Enable verbose debug output
              $mail->isSMTP();                                      // Set mailer to use SMTP
              $mail->Host = 'mail.my-tourguide.net';                   // Specify main and backup SMTP servers
              $mail->SMTPAuth = true;                               // Enable SMTP authentication
              $mail->Username = 'alvin@my-tourguide.net';                 // SMTP username
              $mail->Password = 'nopassword12';                           // SMTP password

              $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
              );

              //$to = $donor_email;

              $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, ssl also accepted
              $mail->Port = 465;                                      // TCP port to connect to

              //Recipients

              $mail->setFrom('alvin@my-tourguide.net', 'I-Donate'); //sender details
              $mail->addAddress($donor_email, $name);     // Add a recipient
              $mail->addAddress($donor_email);               // Name is optional
              $mail->addReplyTo('alvin@my-tourguide.net', 'I-Donate');
              //$mail->addCC('@@@@@@');
              //$mail->addBCC('@@@@@@');

              //Attachments
              //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
              //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

              //Content
              $mail->isHTML(true);                                  // Set email format to HTML
              $mail->Subject = 'Donation Dispatch';
              $mail->Body    = 'Thanks for making a donation<br/>
                                Your donation has been succesfully disatched
                                 <br/><br/><br/>

                                ------------------------<br/>
                                Donor Email Address: '.$donor_email.'<br/>
                                Food Type: '.$FoodType.'<br/>
                                Description: '.$donation_description.'<br/>
                                ------------------------<br/><br/>

                                For furthe enquiries contact jskdabk e<br/>

                                '; // Our message above including the link
              $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

              $mail->send();
              //echo 'Message has been sent';

          	$sql = "INSERT INTO dispatch (dispatch_id, donation_id, dispatchcenterId, dispatch_time, donation_quantity, institution_id, donation_location, FoodType, donor_email,donation_description, expiry_date)VALUES('$donation_id', '$donation_id', '$dispatchcenterId', now(), '$donation_quantity', '$ID', '$donation_location', '$FoodType', '$donor_email', '$donation_description', '$expiry_date')";
          	// $conn->query($sql);

			if($conn->query($sql)===TRUE){
			echo "donation picked";

              $sql_update = "UPDATE `donations` SET status = '0' WHERE donation_id='$donation_id'";
				if($conn->query($sql_update)===TRUE){
				 @header("Location: dryfood.php");
				exit();
				}

			}else{
				echo "Error:".$sql."<br>".$conn->error;
			}

          } catch (Exception $e) {
              //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
          }

}
else if (isset($_POST["add_to_cart1"])){
	$institution_id = $ID;
	$donation_id=htmlspecialchars($_POST["donation_id"]);
	$donation_quantity=htmlspecialchars($_POST["donation_quantity"]);
	$expiry_date=htmlspecialchars($_POST["expiry_date"]);
	$institution_id=htmlspecialchars($_POST["institution_id"]);
	$donation_location=htmlspecialchars($_POST["donation_location"]);
	$dispatchcenterId=htmlspecialchars($_POST["dispatchcenterId"]);
	$FoodType=htmlspecialchars($_POST["FoodType"]);
	$donor_email=htmlspecialchars($_POST["donor_email"]);
	$donation_description=htmlspecialchars($_POST["donation_description"]);
	$name = htmlspecialchars("I-Donate");

	$mail = new PHPMailer(true);                              // Passing true enables exceptions
          try {
              //Server settings
              //Enable SMTP debugging.
              // $mail->SMTPDebug = 2;                                // Enable verbose debug output
              $mail->isSMTP();                                      // Set mailer to use SMTP
              $mail->Host = 'mail.my-tourguide.net';                   // Specify main and backup SMTP servers
              $mail->SMTPAuth = true;                               // Enable SMTP authentication
              $mail->Username = 'alvin@my-tourguide.net';                 // SMTP username
              $mail->Password = 'nopassword12';                           // SMTP password

              $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
              );

              //$to = $donor_email;

              $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, ssl also accepted
              $mail->Port = 465;                                      // TCP port to connect to

              //Recipients

              $mail->setFrom('alvin@my-tourguide.net', 'I-Donate'); //sender details
              $mail->addAddress($donor_email, $name);     // Add a recipient
              $mail->addAddress($donor_email);               // Name is optional
              $mail->addReplyTo('alvin@my-tourguide.net', 'I-Donate');
              //$mail->addCC('@@@@@@');
              //$mail->addBCC('@@@@@@');

              //Attachments
              //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
              //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

              //Content
              $mail->isHTML(true);                                  // Set email format to HTML
              $mail->Subject = 'Donation Dispatch';
              $mail->Body    = 'Thanks for making a donation<br/>
                                Your donation has been succesfully disatched
                                 <br/><br/><br/>

                                ------------------------<br/>
                                Donor Email Address: '.$donor_email.'<br/>
                                Food Type: '.$FoodType.'<br/>
                                Description: '.$donation_description.'<br/>
                                ------------------------<br/><br/>

                                For furthe enquiries contact jskdabk e<br/>

                                '; // Our message above including the link
              $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

              $mail->send();
              //echo 'Message has been sent';
            } catch (Exception $e) {
              //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
          }
	$sql = "INSERT INTO dispatch (dispatch_id, donation_id, dispatchcenterId, dispatch_time, donation_quantity, institution_id, donation_location, FoodType, donor_email, donation_description, expiry_date)VALUES('$donation_id', '$donation_id', '$dispatchcenterId', now(), '$donation_quantity', '$ID', '$donation_location', '$FoodType', '$donor_email','$donation_description','$expiry_date')";

	if($conn->query($sql)===TRUE){
		echo "donation picked";

		$sql_update = "UPDATE `donations` SET status = '0' WHERE donation_id='$donation_id'";
		if($conn->query($sql_update)===TRUE){
		@header("Location: processedfeed.php");
		exit();
		}
	}else{
		echo "Error:".$sql."<br>".$conn->error;
	}
}
else if (isset($_POST["add_to_cart2"])){
	$institution_id = $ID;
	$donation_id=htmlspecialchars($_POST["donation_id"]);
	$donation_quantity=htmlspecialchars($_POST["donation_quantity"]);
	$expiry_date=htmlspecialchars($_POST["expiry_date"]);
	$institution_id=htmlspecialchars($_POST["institution_id"]);
	$donation_location=htmlspecialchars($_POST["donation_location"]);
	$dispatchcenterId=htmlspecialchars($_POST["dispatchcenterId"]);
	$FoodType=htmlspecialchars($_POST["FoodType"]);
	$donor_email=htmlspecialchars($_POST["donor_email"]);
	$donation_description=htmlspecialchars($_POST["donation_description"]);
	$name = htmlspecialchars("I-Donate");

	$mail = new PHPMailer(true);                              // Passing true enables exceptions
          try {
              //Server settings
              //Enable SMTP debugging.
              // $mail->SMTPDebug = 2;                                // Enable verbose debug output
              $mail->isSMTP();                                      // Set mailer to use SMTP
              $mail->Host = 'mail.my-tourguide.net';                   // Specify main and backup SMTP servers
              $mail->SMTPAuth = true;                               // Enable SMTP authentication
              $mail->Username = 'alvin@my-tourguide.net';                 // SMTP username
              $mail->Password = 'nopassword12';                           // SMTP password

              $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
              );

              //$to = $donor_email;

              $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, ssl also accepted
              $mail->Port = 465;                                      // TCP port to connect to

              //Recipients

              $mail->setFrom('alvin@my-tourguide.net', 'I-Donate'); //sender details
              $mail->addAddress($donor_email, $name);     // Add a recipient
              $mail->addAddress($donor_email);               // Name is optional
              $mail->addReplyTo('alvin@my-tourguide.net', 'I-Donate');
              //$mail->addCC('@@@@@@');
              //$mail->addBCC('@@@@@@');

              //Attachments
              //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
              //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

              //Content
              $mail->isHTML(true);                                  // Set email format to HTML
              $mail->Subject = 'Donation Dispatch';
              $mail->Body    = 'Thanks for making a donation<br/>
                                Your donation has been succesfully disatched
                                 <br/><br/><br/>

                                ------------------------<br/>
                                Donor Email Address: '.$donor_email.'<br/>
                                Food Type: '.$FoodType.'<br/>
                                Description: '.$donation_description.'<br/>
                                ------------------------<br/><br/>

                                For furthe enquiries contact jskdabk e<br/>

                                '; // Our message above including the link
              $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

              $mail->send();
              //echo 'Message has been sent';
             } catch (Exception $e) {
              //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
          }
	$sql = "INSERT INTO dispatch (dispatch_id, donation_id, dispatchcenterId, dispatch_time, donation_quantity, institution_id, donation_location, FoodType, donor_email, donation_description, expiry_date)VALUES('$donation_id', '$donation_id', '$dispatchcenterId', now(), '$donation_quantity', '$ID', '$donation_location', '$FoodType', '$donor_email', '$donation_description','$expiry_date')";

	if($conn->query($sql)===TRUE){
		echo "donation picked";

		$sql_update = "UPDATE `donations` SET status = '0' WHERE donation_id='$donation_id'";
		if($conn->query($sql_update)===TRUE){


		@header("Location: perishablefeed.php");
		exit();
		}
	}else{
		echo "Error:".$sql."<br>".$conn->error;
	}
}
?>