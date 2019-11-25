<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e2ducation";

// Create connection
$myConn = new mysqli($servername, $username, $password , $dbname);

// Check connection
if ($myConn->connect_error) {
   // die("Connection failed: " . $myConn->connect_error);
}
//echo "Connected successfully";
?>