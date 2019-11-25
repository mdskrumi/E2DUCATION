<?php
    session_start();
    include("Database/createDB.php");
    include("Controller/config.php");
    include("Database/table.php");

    if(isset($_SESSION['id'])){
        $id = $_SESSION["id"];
        header("Location: View/Home.php?id=$id");
    }

?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>Welcome to E2DUCATION</title>
        
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
        
            .footer {
              left: 0;
              bottom: 0px;
              width: 100%;
              height: 100%;
              padding-bottom: 30px;
              background-color: #84ade3;
              color: black;
              text-align: center;
            }
        </style>
        
    </head>
    
    
    <body style="background-color: azure">
    
    
        <div class="fluid-container">
            
             <!-- MY TITLE MSG -->
            <div class="jumbotron" style="background:#84ade3 ; text-align: center">
                <h1><b><strong>E<medium><b><sup>2</sup></b></medium>DUCATION</strong></b></h1>
                <h1><b><strong>Teach and Learn from anywhere in the World</strong></b></h1>
            </div>  
    
            <!-- Login and SignUp Buttons -->
            <div class="row">
                <div class="col" style="margin-right: 80px"> <span class="float-right">  
                    <button type="button" class="btn btn-primary" onclick="location.href='index.php'">Login</button>
                    <button type="button" class="btn btn-secondary" disabled onclick="location.href='index.php'">SignUp</button>
                    </span>
                </div>
            </div>
        </div>
        
        <!-- SPACE -->
            <div class="row" style="background: azure"><div class="col-sm-12" style="height: 60px"></div></div>
        
        <!-- Login Form -->
        <div class="row" style="padding: 40px">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form action="Database/signUpQuery.php" id="signUpForm" class="was-validated" Method="POST"  >
                    <div class="form-group">
                        <label for="userName">Username:</label>
                        <input type="text" class="form-control" id="userName" placeholder="username" name="userName" required>
                    </div>

                    <div class="form-group">
                        <label for="userEmail">Email:</label>
                        <input type="email" class="form-control" id="userEmail" placeholder="Email" name="userEmail" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="userPassword">Password:</label>
                        <input type="password" class="form-control" id="userPassword" placeholder="password" name="userPassword" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="userConfirmPassword">Confirm Password:</label>
                        <input type="password" class="form-control" id="userConfirmPassword" placeholder="Confirm password" name="userConfirmPassword" required>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            
            </div>
            <div class="col-sm-4"></div>
        </div>
        
        
         <!-- SPACE -->
            <div class="row" style="background: azure"><div class="col-sm-12" style="height: 100px"></div></div>
        <!-- MY Page Footer -->
            <div class="footer">
                <br>
              <h1><b><strong>AT E2DUCATION, LEARNING IS ALWAYS FREE</strong></b></h1>
            </div>
    
    
    
    </body>
    
    
    
    
    
    

</html>