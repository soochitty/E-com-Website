<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="shortcut icon" href="images/logo1.png" />
	<title>Mess</title>
</head>
<body>
	 <?php
            require 'navbar.php';
            ?>
            <div class="top">
             
           </div>
           <br><br>
            <div class="container" style="border-color: #32736d;">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading" style="background-color: #32736d; border-color: #32736d;"></div>
                            <div class="panel-body" style="border-color: #32736d;">
                                <p>You have been logged out. <a href="signup.php">Login again.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	<br><br><br><br><br><br><br><br><br><br>
<footer class="footer" > 
               <div class="container">
               <center>
                   <p>Copyright &copy Mom's Food. All Rights Reserved. | Contact Us: +91 90000 00000</p>
                   <p>This website is developed by Soujanya Chitty</p>
               </center>
               </div>
           </footer>
</body>