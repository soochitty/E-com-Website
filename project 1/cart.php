<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location: signup.php');
    }
    $user_id=$_SESSION['id'];
    $user_products_query="select it.id,it.name,it.price from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$user_id'";
    $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
    $no_of_user_products= mysqli_num_rows($user_products_result);
    $sum=0;
    if($no_of_user_products==0){
        //echo "Add items to cart first.";
    ?>
    <?php
    }else{
        while($row=mysqli_fetch_array($user_products_result)){
            $sum=$sum+$row['price']; 
       }
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
<aside class="cart">
    <h1 align="center">Cart</h1>
    <div class="container">
                <table >
                    <tbody>
                        <tr>
                            <th>Item Name</th><th>Price</th><th></th><th></th>
                        </tr>
                       <?php 
                        $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
                        $no_of_user_products= mysqli_num_rows($user_products_result);
                        $counter=1;
                       while($row=mysqli_fetch_array($user_products_result)){
                           
                         ?>
                        <tr>
                            <th><?php echo $row['name']?></th>
                            <th><?php echo $row['price']?></th>
                            <th><a href='cart_remove.php?id=<?php echo $row['id'] ?>'>-</a></th>
                        </tr>
                       <?php $counter=$counter+1;}?>
                        <tr>
                            <th>Total</th>
                            <th><span>&#8377;</span><?php echo $sum;?>/-</th>
                            <th><a href="sucess.php?id=<?php echo $user_id?>" class="btn btn-primary" style="background-color: #32736d">Confirm Order</a></th>
                        </tr>
                    </tbody>
                </table>
            </div>
  </aside>