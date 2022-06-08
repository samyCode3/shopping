<?php 
require_once "../store/getAdmin.php";
require_once "../messaging/getUserClicked.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <!-- <link rel="stylesheet" href="../v1/v1/script/message.js">
    <link rel="stylesheet" href="../v1/v1/script/message.css"> -->
     <link rel="stylesheet" href="../css2/message.css">
     <link rel="stylesheet" href="../css2/css/all.css">
    <link rel="stylesheet" href="../css2/css/all.min.css">
    <link rel="stylesheet" href="../css2/css/solid.css">
</head>
<body>
    <div class="container">
       
            <div class="user_message">
        <div class="user_container">
        <div class="message_container_1">
        <h3 class="message">Messages</h3>
           <div class="user_profile">
           <?php 
      foreach ($fetch as $admin) { ?>
    <h4 class="chat_name"> <img src="../profile/<?php echo $admin['profile'] ?>" alt="" srcset=""> <a href="message.php?id=<?php echo $admin['id'] ?>"> <?php echo $admin['fullname'] ?></a> </h4>
      <?php }
           ?>
      
   
           </div>
       
</div>
<div class="message_container_2">
    <h3 class="message"><?php echo $fetch_users['fullname'] ?></h3>
    <div class="chat">
     
  
    </div>
    <div class="mess_in">
       <form action="" method="post">
    <input class="message-input" type="text" name="message" id="" placeholder="Write a message">
 <button name ="send" class="message_btn" type="submit">Send</button>
 </form>
    </div>
 
</div>

        </div>
        
            </div>
       
   
</body>
</html>