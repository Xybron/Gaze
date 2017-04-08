<?php

/*
* Database connection classs

*/

/*
*include database credentials
*/
require_once('dbcred.php');

class DB_Connection
{

	/*
	* Database connection properties
	*/


	public $databaseconnector;

	public $databaseResults;

	private $databaseRecords;


//constructor


/*
* Database connection methods
* @ return return true or false
*/

public function dbconnect()
{

	$this-> databaseconnector = mysqli_connect(HOST,USER,PASSWORD,DATABASE);

	if(mysqli_connect_errno())
	{
		return false;
	}
	else{
		return true;
	}



}

/*
* Database fetch methods
* @ return return true or false
*/

public function dbQuery($sql)
{
	if(!$this -> dbconnect())
	{
		return false;
	}

	$this -> databaseResults= mysqli_query($this-> databaseconnector, $sql);

	// check if any record was returned
	if($this->databaseResults== false)
	{
		return false;
	}
	else
	{
		return true;
	}
}
/*
* Database fetch methods
* @ return return true or false
*/

public function dbResult()
{
	
}

// fetch or display method

/*
* Database connection methods
* @ return return true or false
*/

public function dbFetch($arrayType)
{
	

	$result = $this-> databaseResults;

	if($result == false)
	{
		return false;
	}

	else{

		$this->orgData($result,$arrayType);
   		 return true ;

	}

}

/*Formatting my data, can be used as JSON data when parsed*/
private function orgData($result, $arrayType){
	$records = array();
	if(mysqli_num_rows($result) > 0){
		if($arrayType == 0 || $arrayType === NULL){
			while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
			array_push($records,$row);
			} 
		}
		

		elseif($arrayType == 1){
			while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			array_push($records,$row);
			} 
		}
		

		elseif($arrayType == 2){
			while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
			array_push($records,$row);
			} 
		}
		

		else{
			while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
			array_push($records,$row);
			} 
		}
		

	
	$this->databaseRecords = $records;
	}

	else $this->databaseRecords = null;

	
}

public function getDB_records(){
	return $this->databaseRecords;
}





}

/*$mytestdatabase = new DB_Connection;

var_dump($mytestdatabase->dbQuery('SELECT* FROM allmajor'));
var_dump ($mytestdatabase-> dbFetch(1));
*/
?>