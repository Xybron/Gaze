<?php

require_once("../database/dbconnClass.php");

$reg_username = $reg_password = $reg_firstname = $reg_lastname = $reg_email = $reg_major = $reg_gender = $log_userName = $log_password = "";

	
	
	
	
	



//Check for login or registration
if(isset($_POST['logInBtn'])){
	global $log_userName,$log_password;

	//Getting form data
	$log_userName = $_POST['username'];
	$log_password = $_POST['password'];

	echo $userName . "   " . $password;


	/*
	funtion for login validation
	validlogin();
	*/

}

elseif(isset($_POST['registerBtn'])){
	global $reg_username,$reg_password ,$reg_firstname,$reg_lastname,$reg_email,$reg_major,$reg_gender;
	$reg_username = $_POST['reg_Username'];
	$reg_password = $_POST['reg_Password'];
	$reg_firstname = $_POST['reg_Firstname'];
	$reg_lastname = $_POST['reg_Lastname'];
	$reg_email  = $_POST['reg_Email'];
	$reg_major = $_POST['reg_Majors'];
	$reg_gender = $_POST['reg_Gender'];



//Validating the registeration
if(validateregister())
registernewuser();


	




}


//Load all majors
function loadallmajors(){
	$majorConnection = new DB_Connection;
	$sql = 'SELECT * FROM allmajor';
	$majorConnection->dbQuery($sql);
	$majorConnection->dbFetch(1);

	$majors = $majorConnection->getDB_records();

	for($i = 0; $i < sizeof($majors); $i++){

		

		echo "<option value='" . $majors[$i]['majorid'] . "'>" . $majors[$i]['majorname'] . "</option>";
		
	}



}

function validateregister(){
$status = initValidate();

if($status == true){
	$exec = checkusername();

	if($exec == false)
	registernewuser();

	else echo 'Username exists';
}

}

function initValidate(){
global $reg_username,$reg_password ,$reg_firstname,$reg_lastname,$reg_email,$reg_major,$reg_gender;

$success = true;

//Username
if(empty($reg_username) || !isset($reg_username)){
	echo 'Username error';
$success = false;
}


elseif(!preg_match("/^[a-zA-Z ]*$/",$reg_username)){
	echo 'username error';
	$success = false;
}



//Password
if(empty($reg_password) || !isset($reg_password)){
	echo 'Incorrect password';
	$success = false;
}


elseif(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[$%^&@]).{6,15}$/",$reg_password)){
	echo 'Incorrect Passwad';
	$success = false;
}


//Firstname
if(empty($reg_username) || !isset($reg_firstname)){
	echo 'Incorrect first name';
	$success = false;
}


elseif(!preg_match("/^[a-zA-Z ]*$/",$reg_firstname)){
	echo 'Incorrect Firstname';
	$success = false;
}


//Lastname
if(empty($reg_lastname) || !isset($reg_lastname)){
	echo 'Incorrect lastname';
	$success = false;
}


elseif(!preg_match("/^[a-zA-Z ]*$/",$reg_lastname)){
	echo 'Incorrect lastname';
	$success = false;
}


//Email
if(empty($reg_email) || !isset($reg_email)){
	echo 'Incorrect email';
	$success = false;
}


elseif(!preg_match("/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/",$reg_email)){
	echo 'Incorrect email';
	$success = false;
}


//Gender
if(empty($reg_gender) || !isset($reg_gender)){
$success = false;
echo "no gender";
}

//Major
if($reg_major == 0){
	echo 'Select a major';
	$success = false;
}


return $success;




/*
Check if username already exists
checkusername()
*/


}

function checkusername(){
global $reg_username;
	$userConn = new DB_Connection;

$sql = "SELECT username FROM useraccount WHERE username = '$reg_username'" ;

$userConn->dbQuery($sql);
 $userConn->dbFetch(1);

 $records = $userConn->getDB_records();

if(sizeof($records) > 0) {
	echo 'Exists';
	return true;
}


else return false;
}

function registernewuser(){
	global $reg_username,$reg_password ,$reg_firstname,$reg_lastname,$reg_email,$reg_major,$reg_gender;
	
//hashed password
	$securePass = password_hash($reg_password, PASSWORD_DEFAULT);


//Making a connection and query
$registerConnection = new DB_Connection;

$sql = "INSERT INTO useraccount(username,pwd,fname,lname,email,gender,major_id,per_id) VALUES('$reg_username','$securePass','$reg_firstname','$reg_lastname','$reg_email','$reg_gender','$reg_major','1')";

if($registerConnection->dbQuery($sql)){
	//some condition
	

}
else{
	//its alternate
	
}

}

function validlogin(){

	/*
	if validation is correct
	verylogin()
	*/
}


function verifylogin(){


}









?>