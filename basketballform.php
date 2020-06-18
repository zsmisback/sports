<?php 

session_start();

include 'connect.php';

include 'savedata.php';

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true)
{
	header("Location:getout.php");
}

$sql = "SELECT * FROM infra_main WHERE infra_id = '$_SESSION[infra_id]' AND basketball = 'basketball'";
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
	header("Location:footballform.php");
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
<input type="hidden" class="form-control" id="" value="<?php echo $_SESSION['infra_id']; ?>" name="basketballform_info|infra_id"/>
<input type="hidden" class="form-control" id="" value="<?php echo $_SESSION['username']; ?>" name="basketballform_info|username"/>
<input type="hidden" class="form-control" id="" value="<?php echo $_SESSION['infra_id']; ?>" name="infra_timings|infra_id"/>
<input type="hidden" class="form-control" id="" value="<?php echo $_SESSION['username']; ?>" name="infra_timings|username"/>
<input type="hidden" class="form-control" id="" value="basketball" name="infra_timings|sport_name"/>
<h2>Basketball registration</h2>
<hr>
<h5 class="text-center">The Court</h5>
<br>
<div class="row">
<div class="col-md-6">
<input type="text" class="form-control mb-4" name="basketballform_info|court_length" id="colength" placeholder="The Court length (in meters)">
</div>
<div class="col-md-6">
<input type="text" class="form-control mb-4" name="basketballform_info|court_width" id="cowidth" placeholder="The Court width (in meters)">
</div>
</div>
<br>
<div class="row">
<div class="col-md-4">
<h5 class="text-center">The Rim</h5>
<br>
<input type="text" class="form-control mb-4" name="basketballform_info|court_rim" id="corimheight" placeholder="The rims height (in meters)">
</div>

<div class="col-md-4">
<h5 class="text-center">The Center Circle</h5>
<br>
<input type="text" class="form-control mb-4" name="basketballform_info|center_circle" id="centcirclediameter" placeholder="The center circle diameter (in meters)">
</div>
<div class="col-md-4">
<h5 class="text-center">The No Charge Zone arc</h5>
<br>
<input type="text" class="form-control mb-4" name="basketballform_info|nocharge_zone" id="nochzonearc" placeholder="The No Charge Zone arc (in meters)">
</div>
</div>
<br>
<h5 class="text-center">The 3 point line distance from the basket</h5>
<br>
<div class="row">
<div class="col-md-6">
<input type="text" class="form-control mb-4" name="basketballform_info|3point" id="3pointlinedist" placeholder="The 3 point line distance from the basket (in meters)">
</div>
<div class="col-md-6">
<input type="text" class="form-control mb-4" name="basketballform_info|3pointcor" id="3pointlinedistincor" placeholder="The 3 point line distance from the basket in corner (in meters)">
</div>
</div>
<br>
<div class="row">
<div class="col-md-6">
<h5 class="text-center">The Key(shaded lane or restricted area)</h5>
<br>
<input type="text" class="form-control mb-4" name="basketballform_info|the_key" id="thek" placeholder="The Key width (in meters)">
</div>
<div class="col-md-6">
<h5 class="text-center">Free-throw line distance</h5>
<br>
<input type="text" class="form-control mb-4" name="basketballform_info|freethrowline" id="freethr" placeholder="The Free throw line distance from point on the floor (in meters)">
</div>
</div>
<br>
<div class='form-check'>
		     <input type='checkbox' class='form-check-input mb-4' name='basketballform_info|seats' value='seats'>Do you provide seats?
			 </div><div class='form-check'>
		     <input type='checkbox' class='form-check-input mb-4' name='basketballform_info|locker_room' value='locker_room'>Do you provide locker rooms?
			 </div><div class='form-check'>
		     <input type='checkbox' class='form-check-input mb-4' name='basketballform_info|showers' value='showers'>Do you provide showers?
			 </div>
<br>
<textarea class="form-control mb-4" rows="5" name="basketballform_info|summary" id="basketsummary" placeholder="Add a summary about your basketball field"></textarea>
<h3 class="text-center mb-3">Features and Rules</h3>
<h5 class="text-center">(Please write these in either numbered or bulleted forms)</h5>
<hr>
<p class="mb-3">Features that you provide for your customers (For example:Balls,Shoes,Clothes)(Optional):</p> 

<textarea class="form-control mb-4 ckeditor" rows="5" name="basketballform_info|features" id="basktetfeatures"></textarea>
<br>
<p class="mb-3">Rules(If any):</p>	
<textarea class="form-control mb-4 ckeditor" rows="5" name="basketballform_info|rules" id="basketrules"></textarea>
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
</html>	