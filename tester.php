<?php

require_once("database/dbconnClass.php");

$newConnection = new DB_Connection;

$sql = 'SELECT * FROM useraccount';
$sql1 = "SELECT username FROM useraccount WHERE username = 'dog'";

$newConnection->dbQuery($sql1);

 $newConnection->dbFetch(1);


 $stuff = $newConnection->getDB_records();

//print_r($stuff);
//echo $newConnection->dbQuery($sql);
//echo 'First data row = ' . $stuff[0]["username"];

echo sizeof($stuff);

//echo json_encode($stuff);


?>