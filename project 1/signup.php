<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Mess</title>
 
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<?php
require 'navbar.php';
?>
<script>
  function greeting() {
    alert("WelCome");
  }
</script>
<div style="text-align: center; margin-top: 10%;">
  <img src="images/logo3.png">
</div>
<div >
  <h1 style="text-align: center; color: #32736d;">Sign up</h1>
  <form class="container " action="user_registration_script.php" method="post">

    <div class="container formcss" >
    	<label class="label1" for="email"><b>Email</b></label>
      <input class="input1" type="email" placeholder="Enter Email" name="email" required><br><br>

      <label class="label1" for="uname"><b>Username</b></label>
      <input class="input1" type="text" placeholder="Enter Username" name="uname" required><br><br>

      <label class="label1" for="contactno"><b>Contact No</b></label>
      <input class="input1" type="text" placeholder="Enter contact no." name="contactno" required><br><br>

      <label class="label1" for="psw"><b>Password</b></label>
      <input class="input1" type="password" placeholder="Enter Password" name="psw" required><br><br>
        
      <label class="label1" for="psw"><b>Confirm password</b></label>
      <input class="input1" type="password" placeholder="Enter Password again" name="pswa" required><br><br>

      <button style="width: 15%;" type="submit" onclick="greeting()">Sign up</button><br><br>
  </form>
  <label style="width: 30%; float: left;">If already registered </label>

      <button style="width: 15%; float: right;" onclick="document.getElementById('id01').style.display='block'">Login</button>
  </div>
</div>
<div id="id01" class="modal"> 

<form class="modal-content animate" action="login_submit.php" method="post">
	 <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
     <span class="glyphicon glyphicon-user" style="font-size: 40px; color: #32736d;"></span> 
    </div>
    <div class="container">
      <label for="email"><b>Username</b></label>
      <input type="text" placeholder="Enter Email" name="email" required><br><br>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required><br><br>
        
      <button style="width: 5%;" type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>

    <div class="container">
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
</div>
  </form>
</div>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script><br><br>
<footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy Mom's Food. All Rights Reserved. | Contact Us: +91 90000 00000</p>
                   <p>This website is developed by Soujanya Chitty</p>
               </center>
               </div>
           </footer>
</body>
</html>