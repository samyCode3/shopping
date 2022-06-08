<?php 

require_once "../v1/v1/profile.v1.php";
require_once "../v1/v1/users.v1.php";
require_once "../Auth/auth.users.php";

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
    
    <div class="profile_getter">
    
    <div class="profile_text">

        <div class="container_one">
        <p class="p-file">Edit Your Profile</p>
    </div>
    <form action="" method = "post" enctype="multipart/form-data">
        <div class="image_sect">
        <img src="../profile/<?php echo $query_fetch_user ['profile'] ?>" id="profileDisplay" onclick="effect()" alt="" srcset="">
        <div class="error">
            <?php
            if (isset($msg)) { ?>
               <?php echo $msg['error'] ?>
          <?php  }
            ?>
            
        </div>
        </div>

        
        <div class="file">
            <input type="file" name="image" onchange="displayImage(this)" id="profileImage">
        </div>
        <button type="submit" class="profile" name="upload">Upload Your Picture</button>
        <div class="success">
        <?php

            if (isset($msg)) { ?>
               <?php echo $msg['success'] ?>
          <?php  }
            ?>
            </div>
    </div>
   
    </form>
    </div>
    
    <script src="../v1/v1/script/profile.js"></script>
</body>
</html>