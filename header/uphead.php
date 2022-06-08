<?php 
require_once "../core/sesion_starter.php";
require_once "../v1/v1/logout.v1.php";
require_once "../v1/v1/users.v1.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<div class="main_container">

        <div class="ul_controller layer">
            <ul>
                <?php
   if (isset($_SESSION['vkeys'])) { 
    echo '  <a href="../views/home.php"><li >HOME</li></a>
    <a href="../views/product.php"> <li >Product</li></a>
    <a href="../views/notification.php"> <li >Notification</li></a>
    <a href="../views/product.php"> <li >Post Product</li></a>
    <a href="../views/profile.php"> <li >Edit profile</li></a>
    <form action="" method = "post">   
  <button type="submit" class="btn btn-active" name="logout">Logout</button>
    </form>';
    
    echo"<img  class = 'profile_home' src='../profile/$query_fetch_user[profile] ?>'> <h4 class='name_style'>$_SESSION[username]</h4>";
  
      
 } else 
 {
     echo ' <a href="login.php"> <li >Login</li></a>
     <a href="register.php"><li >Register</li></a>';
 }

?>

                
              
            </ul>
        </div>
    </div>
 
</body>
</html>