<?php 

session_start();

include 'connect.php';

include 'savedata.php';

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true)
{
	header("Location:getout.php");
}

$sql = "SELECT * FROM infra_main WHERE infra_id = '$_SESSION[infra_id]' AND cricket = 'cricket'";
$result = $conn->query($sql);

if(!$result)
{
	echo "Error";
}

if($result->num_rows == 1)
{
	
}
else
{
	header("Location:basketballform.php");
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
   <script src="allowonlynumbers.js"></script>
	<link rel="stylesheet" href="assets/css/formstyle.css">
	<script src="ckeditor/ckeditor.js"></script>
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
<input type="hidden" class="form-control" id="" value="<?php echo $_SESSION['infra_id']; ?>" name="cricketform_info|infra_id"/>
<input type="hidden" class="form-control" id="" value="<?php echo $_SESSION['username']; ?>" name="cricketform_info|username"/>
<input type="hidden" class="form-control" id="" value="<?php echo $_SESSION['infra_id']; ?>" name="infra_timings|infra_id"/>
<input type="hidden" class="form-control" id="" value="<?php echo $_SESSION['username']; ?>" name="infra_timings|username"/>
<input type="hidden" class="form-control" id="" value="cricket" name="infra_timings|sport_name"/>
<h2>Cricket registration</h2>
<hr>
<h5 class="text-center">The Ground</h5>
<br>
<div class="row">
<div class="col-md-6">
<input type="text" class="form-control mb-4" name="cricketform_info|cricket_ground_size" id="cricground" placeholder="Cricket ground size (in meters)">
</div>
<div class="col-md-6">
<input type="text" class="form-control mb-4" name="cricketform_info|cricket_pitch_size" id="cricpitch" placeholder="Cricket pitch size (in meters)">
</div>
</div>
<br>
<h3 class="text-center mb-3">Timings</h3>
<h6 class="text-center mb-3">Monday</h6>

<div class="row" id="schedule">
<div class="col-md-6 text-center">
Opening times: 

<input type="time" name="infra_timings|monday_from" id="monfromtime"/>
</div>
<div class="col-md-6 text-center">
Closing times: 

<input type="time" name="infra_timings|monday_to" id="montotime"/>

</div>
</div>
<br>
<h6 class="text-center mb-3">Tuesday</h6>
<div class="row" id="schedule">

<div class="col-md-6 text-center">


Opening times: 

<input type="time" name="infra_timings|tuesday_from" id="tuefromtime"/>

</div>
<div class="col-md-6 text-center">
Closing times: 

<input type="time" name="infra_timings|tuesday_to" id="montotime"/>

</div>
</div>
<br>
<h6 class="text-center mb-3">Wednesday</h6>
<div class="row" id="schedule">

<div class="col-md-6 text-center">


Opening times: 

<input type="time" name="infra_timings|wednesday_from" id="wedfromtime"/>

</div>
<div class="col-md-6 text-center">
Closing times: 

<input type="time" name="infra_timings|wednesday_to" id="wedtotime"/>

</div>
</div>
<br>
<h6 class="text-center mb-3">Thursday</h6>
<div class="row" id="schedule">

<div class="col-md-6 text-center">


Opening times: 

<input type="time" name="infra_timings|thursday_from" id="thursfromtime"/>

</div>
<div class="col-md-6 text-center">
Closing times: 

<input type="time" name="infra_timings|thursday_to" id="thurstotime"/>

</div>
</div>
<br>
<h6 class="text-center mb-3">Friday</h6>
<div class="row" id="schedule">

<div class="col-md-6 text-center">

Opening times: 

<input type="time" name="infra_timings|friday_from" id="frifromtime"/>

</div>
<div class="col-md-6 text-center">
Closing times: 

<input type="time" name="infra_timings|friday_to" id="fritotime"/>

</div>
</div>
<br>
<h6 class="text-center mb-3">Saturday</h6>
<div class="row" id="schedule">
<br>
<div class="col-md-6 text-center">


Opening times: 

<input type="time" name="infra_timings|saturday_from" id="satfromtime"/>

</div>
<div class="col-md-6 text-center">
Closing times: 

<input type="time" name="infra_timings|saturday_to" id="sattotime"/>

</div>
</div>
<br>
<h6 class="text-center mb-3">Sunday</h6>
<div class="row" id="schedule">

<div class="col-md-6 text-center">


Opening times: 

<input type="time" name="infra_timings|sunday_from" id="sunfromtime"/>

</div>
<div class="col-md-6 text-center">
Closing times: 

<input type="time" name="infra_timings|sunday_to" id="suntotime"/>

</div>
</div>
<br>
<textarea class="form-control mb-4" rows="5" name="cricketform_info|cricket_summary" id="cricsummary" placeholder="Add a summary about your cricket field"></textarea>
<h3 class="text-center mb-3">Features and Rules</h3>
<h5 class="text-center">(Please write these in either numbered or bulleted forms)</h5>
<hr>
<p class="mb-3">Features that you provide for your customers (For example:Bats,Balls,Clothes)(Optional):</p> 

<textarea class="form-control mb-4 ckeditor" rows="5" name="cricketform_info|cricket_features" id="cricfeatures"></textarea>
<br>
<p class="mb-3">Rules(If any):</p>	
<textarea class="form-control mb-4 ckeditor" rows="5" name="cricketform_info|cricket_rules" id="cricrules"></textarea>


<p id="error" class="text-center"></p>
<div class="row">
<div class="col-md-6">
<button type="submit" id="signup" name="sign" value="signups" class="btn btn-primary">Submit</button>
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


setInputFilter(document.getElementById("cricground"), function(value) {
  return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});

setInputFilter(document.getElementById("cricpitch"), function(value) {
  return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});

setInputFilter(document.getElementById("numofplayers"), function(value) {
  return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});
</script>
							  
</body>
</html>	