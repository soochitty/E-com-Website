
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
      
<div class="flex-container">
  <div><img src="images/breakfast/masala_dosa.webp" class="itemimg"><p class="title"><img src="images/veg.png" class="type">  Masala dosa</p><p class="discription">crispy Masala dosa with coconut chatni</p><p class="price"><span>&#8377;</span>40/- <br><a href="cart_add.php?id=1" role="button" class="order btn btn-primary btn-block">Add</a></p></div>
  
  <div><img src="images/breakfast/sada_dosa.jpg" class="itemimg"><p class="title"><img src="images/veg.png" class="type">  Sada dosa</p><p class="discription">crispy dosa with coconut chatni</p><p class="price"><span>&#8377;</span>30/- <br><a href="cart_add.php?id=2" role="button" class="order btn btn-primary btn-block">Add</a></p></div>

  <div><img src="images/breakfast/butter_dosa.jpg" class="itemimg"><p class="title"><img src="images/veg.png" class="type">  Butter dosa</p><p class="discription">crispy Butter dosa with coconut chatni</p><p class="price"><span>&#8377;</span>30/- <br><a href="cart_add.php?id=3" role="button" class="order btn btn-primary btn-block">Add</a></p></div>

  <div><img src="images/breakfast/kanda-poha.jpg" class="itemimg"><p class="title"><img src="images/veg.png" style="width: 8%" class="type">  Poha</p><p class="discription">Kande Pohe with lemon and coconut garnished </p><p class="price"><span>&#8377;</span>30/- <br><a href="cart_add.php?id=4" role="button" class="order btn btn-primary btn-block">Add</a></p></div>

  <div><img src="images/breakfast/sabudana.jpg" class="itemimg"><p class="title"><img src="images/veg.png" class="type">  Sabudana Khichdi</p><p class="discription">Khichadi with Curd </p><p class="price"><span>&#8377;</span>30/- <br><a href="cart_add.php?id=5" role="button" class="order btn btn-primary btn-block">Add</a></p></div>
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