<?php
    include("../Controller/config.php");
    include("../Controller/sessionChecker.php");

    $id = $_SESSION["id"];
    //echo $id;

    $getUserDataSql = "SELECT * FROM user WHERE userId = '$id'" ;
    $homeUser = mysqli_query($myConn,$getUserDataSql);
    $userDetail = mysqli_fetch_row($homeUser);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Be A Teacher at E2DUCATION</title>
        
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
            
          
        </style>
        
    </head>
    
    
    <body style="background-color: white;">
    
    
        <div class="fluid-container">
            
            <div class="row" id="pageHeader" style="background: #84ade3">
                <div class="col-sm-12" style="text-align: center">
                    <h1><b><strong>Check Out New Courses.<br>All for Free Now for Limited Time Only</strong></b></h1>
                </div>
            
            </div>
            
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
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
                                    <a class="dropdown-item" href="">Be a Teacher</a>
                                    <a class="dropdown-item" href="../Controller/logout.php" style="color : red">Log Out</a>
                                  </div>
                                
                            </li>
                        </ul>
                      
                      
                  </div>
            </nav>
            
            
            <div class="row" style="padding : 25px">
                <div class="col-sm-2">
                
                </div>
                <div class="col-sm-8">
                    <h2 style="color :red"><strong>You can Upload your tutorials on this platform if you become a teacher.</strong></h2>
                    <h5 style="color : green"><strong>You can earn money by donation. But We will not support you to Sell your Course.</strong></h5>
                    <h4><strong>Ba a Teacher.</strong></h4>
                </div>
                <div class="col-sm-2">
                
                </div>
            
            </div>
            <div class="row">
                <div class="col-sm-3">
                
                </div>
                <div class="col-sm-6"> <span class="float-right"> 
                    <button type="button" class="btn btn-primary"  onclick="location.href='../Database/makeTeacher.php?id=<?php echo $userDetail[0]; ?>'">Accept</button>
                    <button type="button" class="btn btn-secondary"  onclick="location.href='Home.php?id=<?php echo $userDetail[0]; ?>'">Decline</button>
                    </span>
                </div>
                <div class="col-sm-3">
                
                </div>
            
            </div>
            
            <div class="row">
                <div class="col-sm-2">
                
                </div>
                <div class="col-sm-8">
                    <?php
                        if($userDetail[4]==1){
                            echo "<h1><strong>You are already a Teacher</strong></h1>";
                        }
                    ?>
                </div>
                <div class="col-sm-2">
                
                </div>
            
            </div>
          
        </div>

    
    </body>
    
    
    
    
    
    

</html>