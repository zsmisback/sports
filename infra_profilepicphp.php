<?php

$error = '';


if(isset($_POST['sign']))
{
	if(!isset($_FILES['file']['name']))
	{
		$error = "THEME";
	}
	else
	{
		
			$infra_id = $_POST['infra_id'];
            $infra_username = $_POST['infra_username'];
			$path = $_FILES['file']['name'];
			$type = pathinfo($path,PATHINFO_EXTENSION);
			$data = file_get_contents($_FILES['file']['tmp_name']);
			$base64 = 'data:image/'.$type.';base64,'.base64_encode($data);
			$sql = "INSERT INTO infra_profilepic(infra_id,username,profilepic) VALUES('$infra_id','$infra_username','$base64')";
			
	        
	}
	
}

if(isset($_POST['skip']))
{
	$infra_id = $_POST['infra_id'];
            $infra_username = $_POST['infra_username'];
			$path = 'Pics/defaultimg.png';
			$type = pathinfo($path,PATHINFO_EXTENSION);
			echo $data = file_get_contents($path);
			$base64 = 'data:image/'.$type.';base64,'.base64_encode($data);
			$sql = "INSERT INTO infra_profilepic(infra_id,username,profilepic) VALUES('$infra_id','$infra_username','$base64')";
			$result = $conn->query($sql);
}

function clean($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

   return preg_replace('/[^A-Za-z0-9\-.]/', '', $string); // Removes special chars.
}
?>