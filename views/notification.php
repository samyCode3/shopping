<?php 
require_once "../v1/v1/users.v1.php";
require_once "../Auth/auth.users.php";
require_once "../store/store.controller.php";
require_once "../store/store.auth.check.php";
require_once "../controller/noficationController/usersNoticationCon.php";




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css2/index.css">
    <link rel="stylesheet" href="../css2/css/all.css">
    <link rel="stylesheet" href="../css2/webfonts">
</head>
<body>
   <?php  

  require_once "header.php";
   ?>
   <div class="head_container">
     
   </div>
   <div class="main_home_container">

  <?php
    require_once "slide.php";
  ?>
  
     <div class="second_container">
    <h4 class="noti">Notifi<span style="color: red;">cation</span></h4> 
     <div class="first">
    <h6>Thank For Using <span style="color: red;">DayStore</span> </h6>
      <div class="notification_banner">
      <h5><?php echo $store_check_auth_key['notification'] ?> <a href="linkCreator.php" target="__blank">Click here</a></h5>
      <?php
foreach ($store_check_auth_users_notification as $store_check_auth_users_notification_fetch) { ?>
      <div class="noti_get">
 <?php echo $_SESSION['fname'].' '.$store_check_auth_users_notification_fetch['users_notification']?>
 <a href="store_getter.php?id=<?php echo $store_check_auth_users_notification_fetch['store_id'] ?>"><?php echo $store_check_auth_users_notification_fetch['store_link'] ?></a>      
 </div>

<?php }

      ?>
      </div>
   
   
    </div>
      
        </div>
       
    
   
<script src="../v1/v1/script/store.js"></script>
</body>
</html>