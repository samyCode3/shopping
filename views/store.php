<?php
require_once "../v1/v1/users.v1.php";
require_once "../Auth/auth.users.php";
require_once "../store/store.controller.php";
require_once "../store/store.auth.check.php";
require_once "../Auth/auth.store.redirect.php";



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
      <h5 class="text"> Hi <?php echo $query_fetch_user['fullname'] ?></h5>
      <div class="first">
        <div class="other">
          <h5> Seem this is your</h5><span class="span_text"> time here!</span>
        </div>

        <h5 class="ani">Experience great time creating your store.....</h5>
        <p class="ani2"></p>
        <button type="submit" class="pop" id="pop-up">Create Store</button>
        <h3 class="store_package">
          <form action="" method="post">

            <div class="error-2">
              <?php
              if (isset($error)) { ?>
                <?php echo $error['auth'] ?>
              <?php  }
              ?>
            </div>
            <div class="input_store">

              <input type="hidden" class="input_storing" name="fname" value="<?php echo $query_fetch_user['fullname'] ?>">
            </div>
            <div class="input_store">

              <input type="text" class="input_storing" name="store_name" id="store_name" placeholder="Create a store Name" value="<?php if (isset($error)) {
                                                                                                                                    echo $name;
                                                                                                                                  } ?>">
            </div>
            <div class="error-2">
              <?php
              if (isset($error)) { ?>
                <?php echo $error['error'] ?>
              <?php  }
              ?>
            </div>

            <div class="input_store">
              <input type="text" class="input_storing" value="<?php echo $_SESSION['email'] ?>" name="store_email" id="store_email">
            </div>
            <div class="error-2">
              <?php
              if (isset($error)) { ?>
                <?php echo $error['email'] ?>
              <?php  }
              ?>
            </div>


            <div class="btn_loader">
              <button type="submit" class="btn btn-reg" name="store_reg" id="reg">
                <p class="reg_text">Register</p>
                <p class="loader"></p>
              </button>

            </div>


          </form>
        </h3>

      </div>

    </div>



    <script src="../v1/v1/script/store.js"></script>
</body>

</html>