<?php
include("../Controller/config.php");

include("../Controller/sessionChecker.php");

    $id = $_SESSION["id"];
    //echo $id;

    $getUserDataSql = "SELECT * FROM user WHERE userId = '$id'" ;
    $homeUser = mysqli_query($myConn,$getUserDataSql);
    $userDetail = mysqli_fetch_row($homeUser);

        $currentPassword = $_POST["currentPassword"];
        $newPassword = $_POST["newPassword"];
        $confirmPassword = $_POST["confirmPassword"];
        
        if($userDetail[3] != $currentPassword){
            echo '<script language="javascript">';
            echo 'window.alert("Wrong Password")';
            echo '</script>';
            //header("Location: ../signUp.php");
        }
        else if($newPassword != $confirmPassword){
            echo '<script language="javascript">';
            echo 'window.alert("Password Doesnt Match")';
            echo '</script>';
            //header("Location: ../signUp.php");
        }
        else{  
            $updatePassSql = "UPDATE user SET userPassword = '$newPassword' WHERE userId = '$id'" ;
            $isUpdated = mysqli_query($myConn,$updatePassSql); 
           // echo $isUpdated;
            header("Location: ../View/UserAccountPage.php?id=$id");
        }




?>