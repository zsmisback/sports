<?php 

session_start();

include 'connect.php';

include 'infra_signupphp.php';

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true)
{
	header("Location:getout.php");
}

$sql = "SELECT * FROM infra_main WHERE infra_id = '$_SESSION[infra_id]'";
$result = $conn->query($sql);
if(!$result)
{
	echo "Error";
}

if($result->num_rows == 0)
{
	
}
else
{
	header("Location:infra_profilepic.php");
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
 
	<link rel="stylesheet" href="assets/css/formstyle.css">
	
	<style>
	
	</style>
  </head>
  <body>




<section class="form-12" id="home">
	<div class="form-12-content">
		<div class="container">
		<div class="grid grid-column-1 ">				
				<div class="column1">	
				
				
					
					
<form name="infrastructure" id="infras" method="post">
<?php if(isset($error_mysql)){echo "<br>".$error_mysql;} ?>
<input type="hidden" class="form-control" id="" value="<?php echo $_SESSION['infra_id']; ?>" name="infra_id"/>
<input type="hidden" class="form-control" id="" value="<?php echo $_SESSION['username']; ?>" name="infra_username"/>

<h2>Infrastructure registration</h2>
<hr>


<h3 class="text-center">Infrastructure Information</h3>
<hr>

<div class="row">
<div class="col-md-6">
<input type="text" class="form-control mb-4" name="contact_number" id="infn" placeholder="Enter your contact number" value="<?php echo $contact_number; ?>">
</div>
<div class="col-md-6">
<input type="text" class="form-control mb-4" name="pincode" id="infad" placeholder="Enter the pincode of that area" value="<?php echo $pincode; ?>">
</div>
</div>
<input type="text" class="form-control mb-4" name="address" id="infad" placeholder="Enter your infrastructures address" value="<?php echo $address; ?>">
<textarea class="form-control mb-4" rows="5" name="summary" id="infsu" placeholder="Add a summary about your infrastructure"><?php echo $summary; ?></textarea>

	

	
	Select the sport facilities that you provide:
	<br><br>
	<input type="checkbox" id="crick" name="cricket" value="cricket">
  <label for="crick">Cricket</label><br>
  <input type="checkbox" id="footb" name="football" value="football">
  <label for="footb">Football</label><br>
  <input type="checkbox" id="basketb" name="basketball" value="basketball">
  <label for="basketb">Basketball</label><br>
  <input type="checkbox" id="mm" name="mma" value="mma">
  <label for="mm">MMA</label><br><br>


<p id="error" class="text-center"><?php echo $error; ?></p>
<div class="row">
<div class="col-md-6">
<button type="submit" id="signup" name="sign" value="signups" class="btn btn-primary">Signup</button>
</div>
                                  
 </div>
 <br>
                           

 </form>
	</div>
  </div>	
							 
					
				
			
		</div>
	</div>
</section>

							  
</body>
</html>						  