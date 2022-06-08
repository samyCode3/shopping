<?php 
require_once "../v1/v1/users.v1.php";
require_once "../Auth/auth.users.php";
require_once "../store/store.controller.php";
require_once "../store/store.auth.check.php";
require_once "../store/viewContr.php";





?>
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
   <div class="head_container">
     
   </div>
   <div class="main_home_container">

  <?php
    require_once "slide.php";
  ?>
  
     <div class="second_container">
    <h4 class="noti">Provide<span style="color: red;">More Infomation</span><span style="color: rgb(57, 118, 138)";>About Your Store</span></h4> 
     <div class="first">
    <h6>Thank For Using <span style="color: red;">DayStore</span> </h6>
      <div class="view_banner">
          <form action="" method = "post" enctype="multipart/form-data">
        <div class="input_view_storing">
            <input type="file" name="image" id="" placeholder="Attach a profile picture">
            
            <input class="input" type="text" name="bank_name" id="account" value="<?php if(isset($msg)) { echo $account; } ?>" placeholder="Enter Your bank name">
            <div class="error-2">
           <?php 
        if(isset($msg))
        { ?>
          <?php echo $msg['account'] ?>
         
       <?php }
            ?>
             </div>
            <input class="input" type="tel" name="bank_number" id="bank_number" value="<?php if(isset($msg)) { echo $bank_number; } ?>"placeholder="Enter Your bank Number">
            <div class="error-2">
           <?php 
        if(isset($msg))
        { ?>
          <?php echo $msg['bank_number'] ?>
         
       <?php }
            ?>
             </div>
            <input class="input" type="tel" name="phone" id="phone" value="<?php if(isset($msg)) { echo $phone; } ?>" placeholder="Enter Your Phone Number">
            <div class="error-2">
           <?php 
        if(isset($msg))
        { ?>
          <?php echo $msg['phone'] ?>
         
       <?php }
            ?>
             </div>
            <input class="input" type="tel" name="country" id="country" value="<?php if(isset($msg)) { echo $country; } ?>" placeholder="Enter Your Country">
            <div class="error-2">
           <?php 
        if(isset($msg))
        { ?>
          <?php echo $msg['country'] ?>
         
       <?php }
            ?>
             </div>
        </div>
        <button type="submit" name="update" class="update_btn" id="update_store">Update</button>
        <div class="error-2">
           <?php 
        if(isset($msg))
        { ?>
          <?php echo $msg['error'] ?>
         
       <?php }
            ?>
             </div>
    </div>
   
    </div>
      
        </div>
       
    
        </form>
<script src="../v1/v1/script/views.js"></script>
</body>
</html>