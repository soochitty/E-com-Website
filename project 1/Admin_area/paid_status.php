<?php
    require '../connection.php';
    $user_id = $_POST['status'];
    $orders_list_query="UPDATE `users_items` SET paid_status = 'paid' WHERE user_id = $user_id;";
    $orders_list_result=mysqli_query($con,$orders_list_query) or die(mysqli_error($con));
    header('location: Admin.php');

  
?>