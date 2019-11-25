<?php
include("../Controller/config.php");

include("../Controller/sessionChecker.php");

    $id = $_SESSION["id"];
    //echo $id;
 
     $updatePassSql = "UPDATE user SET isTeacher = 1 WHERE userId = '$id'" ;
     $isUpdated = mysqli_query($myConn,$updatePassSql); 
     // echo $isUpdated;
     header("Location: ../View/UserAccountPage.php?id=$id");

        




?>