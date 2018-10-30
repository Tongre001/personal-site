<?php
$server= "localhost";   //Your server
$user = " ";		//Your username
$pass = " ";		//Use your password, if you don't have a password leave it empty
$dbname = " ";		//YOur database name
//creates connection to mysql.
$con = mysqli_connect($server, $user, $pass, $dbname);

//checks connection 
if(!$con){
	die("Can not connect: " . mysqli_connect_error());
//if connection is successful continue to else
}else{
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$company = mysqli_real_escape_string($con, $_POST['company']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$message = mysqli_real_escape_string($con, $_POST['message']);
	$inquery = mysqli_real_escape_string($con, $_POST['inquery']);

	//inserts the variables the SQL QUERY
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
