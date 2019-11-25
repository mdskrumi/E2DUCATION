<?php 
include("./Controller/config.php");

$sqlUser = "CREATE TABLE user (
    userId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    userName VARCHAR(30) NOT NULL,
    userEmail VARCHAR(30) NOT NULL,
    userPassword VARCHAR(18) NOT NULL,
    isTeacher BOOLEAN NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($myConn->query($sqlUser) === TRUE) {
       // echo "User Table created successfully";
    } else {
        //echo "Error creating table: " . $myConn->error;
    }

$sqlCourse = "CREATE TABLE course (
    courseId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    userId INT(6) UNSIGNED,
    courseTitle VARCHAR(30) NOT NULL,
    courseSubscribers INT,
    courseRating INT,
    totalVideoNumber INT,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if ($myConn->query($sqlCourse) === TRUE) {
       // echo "User Table created successfully";
    } else {
        //echo "Error creating table: " . $myConn->error;
    }
$sqlVideo = "CREATE TABLE video (
    videoId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    courseId INT(6) UNSIGNED,
    userId INT(6) UNSIGNED,
    videoTitle VARCHAR(30) NOT NULL,
    videoWatched INT,
    url VARCHAR(200),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if ($myConn->query($sqlVideo) === TRUE) {
       // echo "User Table created successfully";
    } else {
        //echo "Error creating table: " . $myConn->error;
    }

?>