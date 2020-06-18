<?php 

session_start();

include 'connect.php';

include 'infra_profilepicphp.php';

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true)
{
	header("Location:getout.php");
}

$sql = "SELECT * FROM infra_profilepic WHERE infra_id = '$_SESSION[infra_id]'";
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
	header("Location:cricketform.php");
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
				
				
					
					
<form name="infrapic" id="infra_pic" method="post" enctype="multipart/form-data">
<?php if(isset($error_mysql)){echo "<br>".$error_mysql;} ?>
<input type="hidden" class="form-control" id="" value="<?php echo $_SESSION['infra_id']; ?>" name="infra_id"/>
<input type="hidden" class="form-control" id="" value="<?php echo $_SESSION['username']; ?>" name="infra_username"/>
<h2>Infrastructure registration</h2>
<hr>


<h3 class="text-center">Select a profile pic</h3>
<hr>

<div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="file" name="file">
      <label class="custom-file-label" for="file">Choose file</label>
    </div>


<p id="error" class="text-center"><?php echo $error; ?></p>
<div class="row">
<div class="col-md-6">
<button type="submit" id="signup" name="sign" value="sign" class="btn btn-primary">Submit</button>
</div>
<div class="col-md-6 text-right">
<button type="submit" id="skipit" name="skip" value="skip" class="btn btn-primary">Skip</button>
</div>
                                  
 </div>
 <br>
                           

 </form>
	</div>
  </div>	
							 
					
				
			
		</div>
	</div>
</section>
<script>
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
							  
</body>
</html>	