<?php
require_once "../Auth/authen.users.php";
require_once "../v1/v1/login.v1.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css2/index.css">
</head>
<body class="body">
<?php 

require_once "header.php";
?>
<form action="" method = "post">
    <div class="login_sys">
     
    <section class="login">
    <?php
    if (isset($error)) { ?>
     <div class="null">
  <?php  echo $error['null']; ?> 
     </div>
 <?php }

?> 
       <div>
       <input type="text" name="email" id="" placeholder="Enter Your Email" value="<?php if(isset($error)){ echo $email; } ?>">
       <?php
    if (isset($error)) { ?>
     <div class="error">
  <?php  echo $error['email']; ?> 
     </div>
 <?php }

?> 
       <div>
       <input type="password" name="password" id="" placeholder="Enter Your Password">
       <?php
    if (isset($error)) { ?>
     <div class="error">
  <?php  echo $error['password']; ?> 
     </div>
 <?php }

?> 
       </div>
        <button type="submit" class="register" name="login">Register</button>
        <div class="auth_signup_login">

<h5>Don't have an account?</h5><a href="register.php">signup</a>
</div>
    </div>
 
        </section>
    </div>

</form>
    
  
</body>
</html>