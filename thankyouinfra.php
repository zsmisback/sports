<?php 

session_start();

include 'connect.php';




if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true)
{
	header("Location:getout.php");
}



?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Estate Agent a Real Estate Category Bootstrap Responsive Website Template | Home :: W3layouts</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<style>
	
	</style>
  </head>
  <body>
  <h2 class='text-center'>Thank you for joining Champion.in</h2>
  <p class='text-center'>We are currently processing your data so please be patient.</p>
  </body>
  </html>