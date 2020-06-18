<?php

$contact_number = '';

$pincode = '';
$address = '';
$summary = '';
$error = '';

if(isset($_POST['sign']))
{
	$infra_id = $conn->real_escape_string($_POST['infra_id']);
	$infra_username = $conn->real_escape_string($_POST['infra_username']);
	$contact_number = $conn->real_escape_string($_POST['contact_number']);
	$pincode = $conn->real_escape_string($_POST['pincode']);
	$address = $conn->real_escape_string($_POST['address']);
	$summary = $conn->real_escape_string($_POST['summary']);
	
	
	
	if(empty($contact_number))
	{
		$error = 'Please enter the contact_number';
	}
	elseif(empty($pincode))
	{
		$error = 'Please enter the pincode';
	}
	elseif(empty($address))
	{
		$error = 'Please enter the address';
	}
	elseif(empty($summary))
	{
		$error = 'Please enter the summary';
	}
	elseif(!isset($_POST['cricket']) && !isset($_POST['football']) && !isset($_POST['basketball']) && !isset($_POST['mma']))
	{
		$error = 'Please select a sport';
	}
	else
	{
		$sql = "INSERT INTO infra_main(infra_id,username,contact_number,address,pincode,summary,cricket,football,basketball,mma) VALUES('$infra_id','$infra_username','$contact_number','$address','$pincode','$summary','$_POST[cricket]','$_POST[football]','$_POST[basketball]','$_POST[mma]')";
		$result = $conn->query($sql);
	}
	
}

?>