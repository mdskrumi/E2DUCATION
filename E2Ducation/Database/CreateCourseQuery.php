<?php
include("../Controller/config.php");

include("../Controller/sessionChecker.php");

    $id = $_SESSION["id"];
    $courseTitle = $_POST['CourseTitle'];
    
    $getUserDataSql = "SELECT * FROM user WHERE userId = '$id'" ;
    $homeUser = mysqli_query($myConn,$getUserDataSql);
    $userDetail = mysqli_fetch_row($homeUser);

    if($userDetail[4]==0){
        header("Location: ../View/TeacherMsgPage.php?id=$id");
    }else{
        $sqlCreateCourse = "INSERT INTO COURSE(USERID , COURSETITLE , COURSESUBSCRIBERS, COURSERATING , TOTALVIDEONUMBER)
                                    VALUE('$id' , '$courseTitle' , 0 , 0 , 0)";
        $res =  mysqli_query($myConn,$sqlCreateCourse);
        header("Location: ../View/MyCoursePage.php?id=$id");
    }



?>