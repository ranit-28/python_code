<?php 

    $serverName="localhost";
    $username="root";
    $pass="";
    $dbName="ksp";


    //create Connection
    $con=mysqli_connect($serverName,$username,$pass,$dbName);

        //check connection

        if(!$con)
        {
            return false;
        }
        else
        {

            return $con;
        }   


?>