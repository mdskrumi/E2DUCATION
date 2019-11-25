<?php
    $servername = "localhost";
    $username = "root";
    $password = "";


    // Create connection
    $myConn = new mysqli($servername, $username, $password);
    // Check connection
    if ($myConn->connect_error) {
        die("Connection failed: " . $myConn->connect_error);
    }

    // Create database
    $createDbsql = "CREATE DATABASE e2ducation";

    $result = mysqli_query($myConn,$createDbsql);

  /*  if($result == TRUE){
        echo "Database is Created";
    }
    else{
        echo "Database is not Created";
    }*/

    $myConn->close();
?>