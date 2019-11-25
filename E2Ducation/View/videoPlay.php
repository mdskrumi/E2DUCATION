<?php
    include("../Controller/config.php");
    include("../Controller/sessionChecker.php");

    $id = $_SESSION["id"];
    $videoId = $_GET["videoId"];
    //echo $id;

    // Video Data
    $VideoDataSql = "SELECT * FROM video WHERE videoid = '$videoId'" ;
    $videoDetail = mysqli_query($myConn,$VideoDataSql);
    $videoData = mysqli_fetch_array($videoDetail);
    $url = urlencode($videoData[5]);

    echo $url;


    echo "<strong>You are Watching : $videoData[3] Now </strong> <br>";
    echo "<embed src = $url width = 560 height = 315> </embed> ";


    
    

?>