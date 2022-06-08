<?php 

require_once "../v1/v1/signupCon.php";
require_once "../Auth/authen.users.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="../css2/index.css">
</head>
<body class="body">
<?php 

require_once "header.php";
?>
<form action="" method = "post">
    <div class="login_sys">
        <p>Register</p>
    <section class="login">
<?php 


?>

        <div>
        <input type="text" name="fname" id="" placeholder="Enter Your Fullname" value="<?php if(isset($error)){ echo $fname; } ?>">
        <?php
    if (isset($error)) { ?>
     <div class="error">
  <?php  echo $error['fname']; ?> 
     </div>
 <?php }

?> 
    </div>
       <div>
       <input type="text" name="uname" id="" placeholder="Enter Your Username" value = "<?php if(isset($error)){ echo $uname; } ?>" >
       <?php 
 if (isset($error)) { ?>
     <div class="error">
  <?php  echo $error['uname']; ?> 
     </div>
 <?php }

?>
       </div>
       <div>
       <input type="text" name="email" id="" placeholder="Enter Your Email" value ="<?php if(isset($error)){ echo $email; } ?>">
       <?php
    if (isset($error)) { ?>
     <div class="error">
  <?php  echo $error['email']; ?> 
     </div>
 <?php }

?>
  
    </div>
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
        <div>
        <input type="password" name="confirm" id="" placeholder="Retype Your Password">
        </div>
        <div>
        <button type="submit" class="register" name="register">Register</button>
        </div>
      <div class="auth_signup_login">

      <h5>Already have an account?</h5><a href="login.php">Login</a>
      </div>
        </section>
    </div>

</form>
    
  
</body>
</html>