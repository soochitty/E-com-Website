<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $user_id=$_GET['id'];
        $status=$_POST['status'];
        $time=$_POST['time'];
        $the_time = date('h:i:s', strtotime($time));
        $confirm_query="update users_items set order_status='$status', take_time='$the_time' where user_id=$user_id";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
        
    }
     header('location: items.php');
    ?>