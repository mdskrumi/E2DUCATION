<?php
    include("../Controller/config.php");
    include("../Controller/sessionChecker.php");

    $id = $_SESSION["id"];
    $courseId = $_GET["courseId"];
    //echo $id;

    // User Data
    $getUserDataSql = "SELECT * FROM user WHERE userId = '$id'" ;
    $homeUser = mysqli_query($myConn,$getUserDataSql);
    $userDetail = mysqli_fetch_row($homeUser);

    //Course Data
    $courseDataSql = "SELECT * FROM course WHERE courseId = '$courseId'" ;
    $courseDetail = mysqli_query($myConn,$courseDataSql);
    $courseData = mysqli_fetch_array($courseDetail);

    // Video Data
    $VideoDataSql = "SELECT * FROM video WHERE courseId = '$courseId'" ;
    $videoDetail = mysqli_query($myConn,$VideoDataSql);
    

?>
<!DOCTYPE html>
<html>
    <head>
        <title>E2DUCATION Courses</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        
        <style>
        
            #leftMenus > li{
              margin-left:15px;
              margin-right:15px;
            }
        
            #rightMenus > li{
              margin-right:50px;
            }
            
            .footer {
              left: 0;
              bottom: 0px;
              width: 100%;
              padding-bottom: 30px;
              background-color: #84ade3;
              color: black;
              text-align: center;
              margin-top: 100px;
            }
            
            #addImageLink{
                align-self: auto;
            }
        </style>
        
    </head>
    
    
    <body style="background-color: white;">
    
    
        <div class="fluid-container">
            
            <div class="row" id="pageHeader" style="background: #84ade3">
                <div class="col-sm-12" style="text-align: center">
                    <h1><b><strong>Check Out New Courses.<br>All for Free Now for Limited Time Only</strong></b></h1>
                </div>
            
            </div>
            
            <nav class="navbar navbar-expand-md bg-dark navbar-dark" style="margin-bottom: 30px;">
                  <!-- Brand -->
                <a class="navbar-brand" href="Home.php?id=<?php echo $userDetail[0]; ?>"><b>E<sup>2</sup>DUCATION</b></a>

                  <!-- Toggler/collapsibe Button -->
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <!-- Navbar links -->
                  <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        
                      <ul class="navbar-nav mr-auto" id="leftMenus" >
                            <li class="nav-item">
                                <a class="nav-link" href="MyCoursePage.php?id=<?php echo $userDetail[0]; ?>">My Courses</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="CoursesPage.php?id=<?php echo $userDetail[0]; ?>">Find New Courses</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="learnAboutUs.php?id=<?php echo $userDetail[0]; ?>">Learn About E2DUCATION</a>
                            </li>
                            <li>
                                <form class="form-inline" action="/action_page.php">
                                     <input class="form-control mr-sm-4" type="text" placeholder="Search Here">
                                     <button class="btn btn-primary" type="submit">Search</button>
                                </form>
                            </li>
                      </ul>
                        
                      <ul class="navbar-nav ml-auto" id="rightMenus" >
                            <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    <?php 
                                        echo $userDetail[1];    
                                    ?>
                                  </a>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="UserAccountPage.php?id=<?php echo $userDetail[0]; ?>">Account</a>
                                    <a class="dropdown-item" href="TeacherMsgPage.php?id=<?php echo $userDetail[0]; ?>">Be a Teacher</a>
                                    <a class="dropdown-item" href="../Controller/logout.php" style="color : red">Log Out</a>
                                  </div>
                                
                            </li>
                        </ul>
                      
                      
                  </div>
            </nav>
            
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <?php
                        echo "<strong>".$courseData[2]."</strong>";
                      
                        if($id == $courseData[1]){
                            echo "<br>You are The Onwer Of The Course To Add new Tutorial Click Here";
                            echo "<a href = 'AddNewVideoPage.php?courseId=$courseData[0]'> Add New Video </a>";
                        }
                    
                        echo "<br>";
                        echo "<ol>";
                        while($videoRow = mysqli_fetch_array($videoDetail)){
                            echo " <li> <a href = '$videoRow[5]'> <strong>$videoRow[3]</strong> </a> </li>";
                        }
                    echo "</ol>";
                    ?>
                </div>
                <div class="col-sm-2"></div>
            </div>

            
            
            <!-- MY Page Footer -->
            <div class="footer">
                <br>
              <h1><b><strong>AT E2DUCATION, LEARNING IS ALWAYS FREE</strong></b></h1>
            </div>
            
          
        </div>

    
    </body>
    
    
    
    
    
    

</html>