<?php
include("../Controller/config.php");
include("../Controller/sessionChecker.php");

    $id = $_SESSION["id"];
    $courseId = $_GET['courseId'];
    
    $videoTitle = $_FILES['file']['name'];
    $temp = $_FILES['file']['tmp_name'];

    echo $videoTitle;

    move_uploaded_file($temp,"../Uploaded/Video/".$videoTitle);

    $url = "http://localhost/e2ducation/Uploaded/Video/$videoTitle";

    $videoSql = "INSERT INTO VIDEO (COURSEID , USERID , VIDEOTITLE , VIDEOWATCHED , URL)
                            VALUES('$courseId' , '$id' , '$videoTitle' , 0 , '$url')";

    $res = mysqli_query($myConn , $videoSql);

    if($res == TRUE){
        
        $updateVideoNumber = "update course set totalvideonumber = totalvideonumber + 1 where courseid = $courseId";
        $up = mysqli_query($myConn , $updateVideoNumber);
        
        header("location:../View/CourseDetailPage.php?courseId=$courseId");
    }else{
        header("location:../View/AddNewVideo.php?courseId=$courseId");
    }
    
    



?>