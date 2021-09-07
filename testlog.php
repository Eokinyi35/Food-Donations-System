<?php
session_start();

$username = $_POST['username'];
$password = md5($_POST['password']);

$data=array("SELECT * FROM household WHERE username = '$username' and password = '$password'"=>array("url"=>"body.php","password"=>"password"),
            "SELECT * FROM aid_institution WHERE username = '$username' and password = '$password'"=>array("url"=>"campaigns.php","password"=>"password"));

if(isset($_POST['username']) && isset($_POST['password'])) {
    if($data[$_POST['username']]['password'] == $_POST['password']) {
		$_SESSION['username'] = $_POST['username'] . " " . $_POST['password'];
        header('Location: ' . $data[$_POST['username']]['url']);
    } else {
        login('Wrong user name or password. <br>');
    }
} else {
    echo "<script>alert('Login unsuccessful.');</script>";
	 echo "<script>window.close(); window.location = \"login.php\";</script>";
}
?>