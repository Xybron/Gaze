<?php
include("../database/databaseconnect.php");
$major_sql= "SELECT * FROM allmajor";
$major_Options= mysqli_query($databaseconnect,$major_sql);
if(mysqli_num_rows($major_Options)>0){
	foreach($major_Options as $major){
		echo '<option value =' .$major['majorid'].'>'.$major['majorname'].'</options>'.'<br>';

	}

} 
else {
	"Code not correct";
}



?>