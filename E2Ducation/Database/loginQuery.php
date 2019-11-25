<?php
    session_start();    
    include("../Controller/config.php");
    
    $userEmail = $_POST["userEmail"];
    $userName = $_POST["userEmail"];
    $password = $_POST["userPassword"];
    $loginCheckSql = "SELECT * FROM user WHERE (userName = '$userName' OR userEmail = '$userEmail' ) AND userPassword = '$password' " ;
    $res = mysqli_query($myConn,$loginCheckSql);
    $rowcount=mysqli_num_rows($res);
    if($rowcount == 1){
        $row = mysqli_fetch_row($res);
        $_SESSION["id"] = $row[0];
          header("Location: ../View/Home.php?id=$row[0]");  
    }else{
        header("Location: ../index.php?status='failed'"); 
    }        

?>