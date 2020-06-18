<?php 

session_start();

include 'connect.php';

include 'savedata.php';

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true)
{
	header("Location:getout.php");
}

$sql = "SELECT * FROM infra_main WHERE infra_id = '$_SESSION[infra_id]' AND mma = 'mma'";
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
	header("Location:thankyouinfra.php");
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
<input type="hidden" class="form-control" id="" value="<?php echo $_SESSION['infra_id']; ?>" name="mmaform_info|infra_id"/>
<input type="hidden" class="form-control" id="" value="<?php echo $_SESSION['username']; ?>" name="mmaform_info|username"/>
<input type="hidden" class="form-control" id="" value="<?php echo $_SESSION['infra_id']; ?>" name="infra_timings|infra_id"/>
<input type="hidden" class="form-control" id="" value="<?php echo $_SESSION['username']; ?>" name="infra_timings|username"/>
<input type="hidden" class="form-control" id="" value="mma" name="infra_timings|sport_name"/>
<h2>MMA registration</h2>
<hr>
<input type='text' class='form-control mb-4' name='mmaform_info|exterior' placeholder='Octagon Exterior (in meters)'><input type='text' class='form-control mb-4' name='mmaform_info|interior' placeholder='Octagon Interior (in meters)'><input type='text' class='form-control mb-4' name='mmaform_info|walkaway' placeholder='Octagon Walkaway (in meters)'><input type='text' class='form-control mb-4' name='mmaform_info|entrance_gates' placeholder='Octagon Entrance Gates (in meters)'><input type='text' class='form-control mb-4' name='mmaform_info|height_gr_cv' placeholder='Octagon Height from ground to canvas(in meters)'><input type='text' class='form-control mb-4' name='mmaform_info|height_cv_fe' placeholder='Octagon Height from canvas to fence (in meters)'>
             <div class='form-check'>
		     <input type='checkbox' class='form-check-input mb-4' name='mmaform_info|seats' value='seats'>Do you provide seats?
			 </div><div class='form-check'>
		     <input type='checkbox' class='form-check-input mb-4' name='mmaform_info|locker_room' value='locker_room'>Do you provide locker rooms?
			 </div><div class='form-check'>
		     <input type='checkbox' class='form-check-input mb-4' name='mmaform_info|showers' value='showers'>Do you provide showers?
			 </div>

<br>
<textarea class="form-control mb-4" rows="5" name="mmaform_info|summary" id="basketsummary" placeholder="Add a summary about your octagon"></textarea>
<h3 class="text-center mb-3">Features and Rules</h3>
<h5 class="text-center">(Please write these in either numbered or bulleted forms)</h5>
<hr>
<p class="mb-3">Features that you provide for your customers (For example:Shoes,Clothes,Gloves)(Optional):</p> 

<textarea class="form-control mb-4 ckeditor" rows="5" name="mmaform_info|features" id="basktetfeatures"></textarea>
<br>
<p class="mb-3">Rules(If any):</p>	
<textarea class="form-control mb-4 ckeditor" rows="5" name="mmaform_info|rules" id="basketrules"></textarea>
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


setInputFilter(document.getElementById("colength"), function(value) {
  return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});

setInputFilter(document.getElementById("cowidth"), function(value) {
  return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});

setInputFilter(document.getElementById("corimheight"), function(value) {
  return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});

setInputFilter(document.getElementById("centcirclediameter"), function(value) {
  return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});

setInputFilter(document.getElementById("nochzonearc"), function(value) {
  return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});

setInputFilter(document.getElementById("3pointlinedist"), function(value) {
  return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});

setInputFilter(document.getElementById("3pointlinedistincor"), function(value) {
  return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});

setInputFilter(document.getElementById("thek"), function(value) {
  return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});

setInputFilter(document.getElementById("freethr"), function(value) {
  return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});
</script>
							  
</body>