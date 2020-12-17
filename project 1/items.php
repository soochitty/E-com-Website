<?php
    session_start();
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
             
           </div><br><br><br>
              <div class="container">
               <div class="row items">
                   <div class="col-xs-4">
                       <div  class="thumbnail shadow p-3 mb-5 bg-white rounded">
                           <a href="breakfast.php">
                                <img src="images/breakfast.jpg" alt="Breakfast">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Breakfast</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail shadow p-3 mb-5 bg-white rounded">
                           <a href="lunch.php">
                               <img src="images/lunch.jpg" alt="Lunch">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Lunch/Dinner</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail shadow p-3 mb-5 bg-white rounded">
                           <a href="products.php">
                               <img src="images/snacks.webp" alt="Snacks">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Snacks</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
          <br><br>
<footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy Mom's Food. All Rights Reserved. | Contact Us: +91 90000 00000</p>
                   <p>This website is developed by Soujanya Chitty</p>
               </center>
               </div>
           </footer>
</body>