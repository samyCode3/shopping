<?php 

require_once "../store/linkContr.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Link</title>
    <link rel="stylesheet" href="../css2/index.css">
</head>
<body>
<div class="main_home_container">
<div class="second_container">
    <h4 class="noti">Link<span style="color: red;">Session</span></h4> 
     <div class="first">
    <h6>Start By Creating <span style="color: red;">A Custormer Link</span> </h6>
      <div class="notification_banner">
      <h5>Create Your link</h5>
   <form action="" method = "post">
       <input type="text" class="link_put" name="link" placeholder="Create Your Link">
      <div class="error">
          <?php 
   if(isset($error))
   { ?>
   <?php echo $error['error'] ?>
 <?php  }

?>
      </div>
       <br>
       <button type="submit" name="btn_link" class="btn_dom" id = "btn_link">Create Link</button>
       <p class="dom">Creating link...</p>
   </form>
      </div>
   
   
    </div>
      
        </div>
       
  </div>
</div>
</div>
<script src="../v1/v1/script/dom.js"></script>
</body>
</html>