<?php 

session_start();

include 'connect.php';

include 'savedata.php';

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true)
{
	header("Location:getout.php");
}

$sql = "SELECT * FROM infra_main WHERE infra_id = '$_SESSION[infra_id]' AND football = 'football'";
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
	header("Location:mmaform.php");
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
<input type="hidden" class="form-control" id="" value="<?php echo $_SESSION['infra_id']; ?>" name="footballform_info|infra_id"/>
<input type="hidden" class="form-control" id="" value="<?php echo $_SESSION['username']; ?>" name="footballform_info|username"/>
<input type="hidden" class="form-control" id="" value="<?php echo $_SESSION['infra_id']; ?>" name="infra_timings|infra_id"/>
<input type="hidden" class="form-control" id="" value="<?php echo $_SESSION['username']; ?>" name="infra_timings|username"/>
<input type="hidden" class="form-control" id="" value="football" name="infra_timings|sport_name"/>
<h2>Football registration</h2>
<hr>
<h5 class="text-center">The Field</h5>
<br>
<div class="row">
<div class="col-md-6">
<input type="text" class="form-control mb-4" name="footballform_info|field_length" id="footfieldlength" placeholder="Football field length size (in meters)">
</div>
<div class="col-md-6">
<input type="text" class="form-control mb-4" name="footballform_info|field_width" id="footfieldwidth" placeholder="Football field width size (in meters)">
</div>
</div>
<h5 class="text-center">The Goal Area</h5>
<br>
<div class="row">
<div class="col-md-6">
<input type="text" class="form-control mb-4" name="footballform_info|goal_length" id="golength" placeholder="The goal area length size (in meters)">
</div>
<div class="col-md-6">
<input type="text" class="form-control mb-4" name="footballform_info|goal_width" id="gowidth" placeholder="The goal area width size (in meters)">
</div>
</div>
<h5 class="text-center">The Penalty Area</h5>
<br>
<div class="row">
<div class="col-md-6">
<input type="text" class="form-control mb-4" name="footballform_info|penalty_length" id="penlength" placeholder="The penalty area length size (in meters)">
</div>
<div class="col-md-6">
<input type="text" class="form-control mb-4" name="footballform_info|penalty_width" id="penwidth" placeholder="The penalty area width size (in meters)">
</div>
</div>
<br>
<div class='form-check'>
		     <input type='checkbox' class='form-check-input mb-4' name='footballform_info|seats' value='seats'>Do you provide seats?
			 </div><div class='form-check'>
		     <input type='checkbox' class='form-check-input mb-4' name='footballform_info|locker_room' value='locker_room'>Do you provide locker rooms?
			 </div><div class='form-check'>
		     <input type='checkbox' class='form-check-input mb-4' name='footballform_info|showers' value='showers'>Do you provide showers?
			 </div>
<br>
<textarea class="form-control mb-4" rows="5" name="footballform_info|summary" id="footsummary" placeholder="Add a summary about your football field"></textarea>
<h3 class="text-center mb-3">Features and Rules</h3>
<h5 class="text-center">(Please write these in either numbered or bulleted forms)</h5>
<hr>
<p class="mb-3">Features that you provide for your customers (For example:Balls,Shoes,Clothes)(Optional):</p> 

<textarea class="form-control mb-4 ckeditor" rows="5" name="footballform_info|features" id="footfeatures"></textarea>
<br>
<p class="mb-3">Rules(If any):</p>	
<textarea class="form-control mb-4 ckeditor" rows="5" name="footballform_info|rules" id="footrules"></textarea>
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


setInputFilter(document.getElementById("footfieldlength"), function(value) {
  return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});

setInputFilter(document.getElementById("footfieldwidth"), function(value) {
  return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});

setInputFilter(document.getElementById("golength"), function(value) {
  return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});

setInputFilter(document.getElementById("gowidth"), function(value) {
  return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});

setInputFilter(document.getElementById("penlength"), function(value) {
  return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});

setInputFilter(document.getElementById("penwidth"), function(value) {
  return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
});
</script>
							  
</body>
</html>	