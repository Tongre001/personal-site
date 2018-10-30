<?php
$server= "localhost";
$user = "amendiet_root";
$pass = "100%EmptyRoot";
$dbname = "amendiet_forms";
//creates connection to mysql.
$con = mysqli_connect($server, $user, $pass, $dbname);

//checks connection 
if(!$con){
	die("Can not connect: " . mysqli_connect_error());
}else{
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$company = mysqli_real_escape_string($con, $_POST['company']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$message = mysqli_real_escape_string($con, $_POST['message']);
	$inquery = mysqli_real_escape_string($con, $_POST['inquery']);

	$sql = "INSERT INTO forms (name, company, email, message, inquery) 
	VALUES ('$name','$company','$email','$message','$inquery')";

	if($con->query($sql)){
		echo "Records Added Successfully";
	}
	else{
		echo "Error". $sql ."<br/>". $con->error;
	}

	//closes the sqlDatabase
	mysqli_close($con);
}
?>