<?php
include("../database/databaseconnect.php");
$major_sql= "SELECT * FROM allmajor";
$major_Options= mysqli_query($databaseconnect,$major_sql);
if(mysqli_num_rows($major_Options)>0){
	foreach($major_Options as $major){
		echo '<tr><td>'.$major['majorname'].'</td></tr>';
	}

} 
else {
	"Code not correct";
}

function Delete(){

$delete_major_sql= "DELETE FROM allmajor where majorname=' '";

$delete_majors= mysqli_query($databaseconnect,$delete_major_sql);



if(mysqli_num_rows($delete_majors1)>0){
	foreach($delete_majors as $major){
		echo '<tr><td>'.$major['majorname'].'</td></tr>';
	}
}
} 
?>