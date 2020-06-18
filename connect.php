<?php


$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

 $_SESSION["loggedin"] = true;						 
 $_SESSION["username"]='zama';
 $_SESSION["infra_id"]='gaedss';
 $_SESSION["position"]='infrastructure';
						 
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>