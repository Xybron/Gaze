<?php

require_once("../database/databaseconnect.php");

$name = $_REQUEST['Uname'];
$password= $_REQUEST['password'];
$fname= $_REQUEST['fName'];
$lname= $_REQUEST['lName'];
$gender=$_REQUEST['gender'];
$email=$_REQUEST['email'];
$major=$_REQUEST['major'];

$sql = "INSERT INTO useraccount(username,pwd, fname,lname, email,gender,major_id,userstatus,per_id) VALUES('$name','$password','$fname','$lname','$email','$gender','$major','ACTIVE','2')";

	if(mysqli_query($databaseconnect,$sql)){
		echo 'You are now a member';
	}
	else{
		echo'You cannot be allowed' .mysqli_error($databaseconnect);
	}
	mysqli_close($databaseconnect);



?>