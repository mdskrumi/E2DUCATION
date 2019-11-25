<?php
include("../Controller/config.php");

        $userName = $_POST["userName"];
        $userEmail = $_POST["userEmail"];
        $password = $_POST["userPassword"];
        $cPassword = $_POST["userConfirmPassword"];

        if($password != $cPassword){
            echo '<script language="javascript">';
            echo 'window.alert("Password Doesnt Match")';
            echo '</script>';
            //header("Location: ../signUp.php");
        }

        $validationSql = "SELECT * FROM user WHERE userName = '$userName'" ;
        $rowcount=mysqli_num_rows(mysqli_query($myConn,$validationSql));
        $validationSql2 = "SELECT * FROM user WHERE userEmail = '$userEmail'" ;
        $rowcount2=mysqli_num_rows(mysqli_query($myConn,$validationSql2));

        if($rowcount > 0){
            echo '<script language="javascript">';
            echo 'window.alert("User Name is already Taken")';
            echo '</script>';
        // header("Location: ../signUp.php");
            
        }
        else if($rowcount2 > 0){
            echo '<script language="javascript">';
            echo 'window.alert("Email is already Used")';
            echo '</script>';
            //header("Location: ../signUp.php");
            
        }
        else{
            $sql = "INSERT INTO user (userName, userEmail, userPassword , isTeacher)
            VALUES ( '$userName' , '$userEmail', '$password' , false )";
        
            $res = mysqli_query($myConn,$sql);
        
            if ($res === TRUE) {
            // echo "New record created successfully";
                 header("Location: ../index.php");
            } else {
                header("Location: ../index.php?status='failed'"); 
            // echo "Error: " . $sql . "<br>" . $myConn->error;
            }
        }

?>