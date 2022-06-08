<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css2/index.css">
</head>
<body>
  <?php 
  require_once "header.php";
  ?>
<div class="first_container">
   <div class="list_product">
     <ul>
     <img src="../fontawesome-free-6.1.1-web/webfonts/fa-brands-400.ttf" alt=""></i> <a href="#" class="list_link"> <li> Home</li></a>
       <a href="dashboard.php" class="list_link"> <li> Dasboard</li></a>
      <?php require_once "../Auth/auth.store.php" ?>
       <a href="#" class="list_link"> <li> Messages</li></a>
       <a href="notification.php" class="list_link"> <li> Notification</li></a>
       <a href="#" class="list_link"> <li> Connect</li></a>
       <a href="#" class="list_link"> <li> Check Cart</li></a>
       <a href="#" class="list_link"> <li> Settings</li></a>
       <a href="#" class="list_link"> <li> Logout</li></a>
       <a href="#" class="list_link"> <li> Report Spam</li></a>
       <a href="#" class="list_link"> <li> Block product</li></a>
     </ul>
   </div>
     </div>

</body>
</html>