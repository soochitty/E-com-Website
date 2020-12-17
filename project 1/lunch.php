
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
            require 'cart.php';
           ?>
           <div class="top">
             
           </div>
           <div class="flex-container ">
  <div><img src="images/lunch/veg-thali.jpg" class="itemimg"><p class="title"><img src="images/veg.png" class="type">  Veg Thali</p><p class="discription">3 soft roti,2 veg curry, dal & rice, salad/papad, Buttermilk.</p><p class="price"><span>&#8377;</span>40/- <br><a href="cart_add.php?id=6" role="button" class="order btn btn-primary btn-block">Add</a></p></div>
  
  <div><img src="images/lunch/nonveg-thali.jpg" class="itemimg"><p class="title"><img src="images/non_veg.png" class="type">  Non-Veg Thali</p><p class="discription">chicken/mutton curry,3 roti, rice,salad.</p><p class="price"><span>&#8377;</span>30/- <br><a href="cart_add.php?id=7" role="button" class="order btn btn-primary btn-block">Add</a></p></div>

  <div><img src="images/lunch/fish-thali.jpg" class="itemimg"><p class="title"><img src="images/non_veg.png" class="type">  Fish Thali</p><p class="discription">Fish Curry</p><p class="price"><span>&#8377;</span>30/- <br><a href="cart_add.php?id=8" role="button" class="order btn btn-primary btn-block">Add</a></p></div>

  <div><img src="images/lunch/Egg-Thali.jpg" class="itemimg"><p class="title"><img src="images/non_veg.png" class="type">  Egg Thali</p><p class="discription">Egg curry </p><p class="price"><span>&#8377;</span>30/- <br><a href="cart_add.php?id=9" role="button" class="order btn btn-primary btn-block">Add</a></p></div>

  <div><img src="images/lunch/Chapati.jpg" class="itemimg"><p class="title"><img src="images/veg.png" class="type">  Chapati</p><p class="discription">soft chapati</p><p class="price"><span>&#8377;</span>30/- <br><a href="cart_add.php?id=10" role="button" class="order btn btn-primary btn-block">Add</a></p></div>
</div>
<br><br><br>
<footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy Mom's Food. All Rights Reserved. | Contact Us: +91 90000 00000</p>
                   <p>This website is developed by Soujanya Chitty</p>
               </center>
               </div>
           </footer>
</body>