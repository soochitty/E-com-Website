<?php
    require '../connection.php';
    $orders_list_query="SELECT id ,item_id ,user_id, take_time, paid_status, order_status FROM `users_items` WHERE paid_status = 'unpaid' ";
    $orders_list_result=mysqli_query($con,$orders_list_query) or die(mysqli_error($con));
    $no_of_orders= mysqli_num_rows($orders_list_result);

    if($no_of_orders==0){
        echo "No Orders Left.";
    ?>
    <?php
    }else{
        while($row=mysqli_fetch_array($orders_list_result)){
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
	<link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="shortcut icon" href="images/logo1.png" />
	<title>Mess</title>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand " href="index.php"><img src="images/logo1.png" style="width: 70%; margin-top: -20%;"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">

        <li><a href="history.php">HISTORY</a></li>
      </ul>
       
      </ul>
    </div>
  </div>
</nav>
<div class="top">
             
           </div>
           <br><br>
           <h1 align="center">Pending Orders</h1>
    <div class="container">
                <table >
                    <tbody>
                        <tr>
                            <th>id</th><th>item_id</th><th>Users_id</th><th>Take Time</th><th>Paid_status</th><th>Take Away/Having</th>
                        </tr>
                        <?php
                        $orders_list_result=mysqli_query($con,$orders_list_query) or die(mysqli_error($con));
                        $no_of_orders= mysqli_num_rows($orders_list_result);
                        $counter=1;
                       while($row=mysqli_fetch_array($orders_list_result)){
                        $u_id=$row['user_id'];
                           
                         ?>
                        <tr>
                            <th><?php echo $row['id']?></th>
                            <th><?php echo $row['item_id']?></th>
                            <th><?php echo $row['user_id']?></th>
                           <th><?php echo $row['take_time']?></th>
                             <th><?php echo $row['paid_status']?></th>
                              <th><?php echo $row['order_status']?></th>
                              <th><form action="paid_status.php" method="post">
                                <button name="status" value=<?php echo $u_id ?> >Paid</button>
                              </form></th>
                        </tr>
                       <?php $counter=$counter+1;}?>
                    
                    </tbody>
                </table>
            </div>