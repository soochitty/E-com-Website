<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $user_id=$_GET['id'];
        $confirm_query="update users_items set payment_status='Confirmed' where user_id=$user_id";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
        
    }
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
          <div class="jumbotron text-center">
  <h1>Order Placed</h1>
  <p>Thankyou For Ordering.</p>
  <p>You can come and Have your Meal in our Mess, else take away. </p>
</div>
<div class="container formcss">
	<form action="status.php?id=<?php echo $user_id?>" method="post">
		<label>Select Time :</label>
		<input name="time" type="time" />
		<br><br>
		 <input type="radio"  name="status" value="Take away">
  <label>Take Away</label><br>
  <input type="radio"  name="status" value="Will Have">
  <label>Will Have</label><br>
  <button name="done">Done</button>
	</form>
</div><br><br>
	<footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy Mom's Food. All Rights Reserved. | Contact Us: +91 90000 00000</p>
                   <p>This website is developed by Soujanya Chitty</p>
               </center>
               </div>
           </footer>
</body>
</body>