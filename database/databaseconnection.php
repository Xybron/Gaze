<?php

require_once('dbcred.php');

/**
*Database connection cass 
*/

class Dbconnection{
    private $conn;
    private $result;



    /*
    *make a connection to the database
    @return true or false
    */
    public function getConnection(){
        $this->conn = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
        if(mysqli_connect_errno()){
            return false;
        }

        else{
            return true;
        }
    }

    public function closeConnection(){


    }

    public function executeQuery(){


    }

    public function getResult(){


    }






}


?>