<?php 

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
    <link rel="stylesheet" href="../fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="../fontawesome-free-6.1.1-web/css/all.min.css">
    
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
       <div class="product_cat">
        <h4><p>Categories</p></h4>
        <hr>
        <h3>Food</h3>
       </div>
        <div class="product_image">
        <h4>maize</h4>
  <img src="../images/Multicolor-01-2.3.001-bigpicture_01_2.jpg" alt="" srcset="">
    <div>
      <h2>Price: $1200</h2>
      <h3>Quality: 10</h3>
  <a href="#">Add to cart</a>
  </div> 
     </div>
     <div class="product_image">
       <h4>T-shirit</h4>
  <img src="../images/Multicolor-01-2.3.001-bigpicture_01_2.jpg" alt="" srcset="">
    <div>
    <h2>Price: $1200</h2>
      <h3>Quality: 10</h3>
  <a href="#">Add to cart</a>
  </div> 
     </div>
     <hr>
     <div class="product_cat">
        <h3>Cloth</h3>
       </div>
        <div class="product_image">
          <h4>Rice</h4>
  <img src="../images/Multicolor-01-2.3.001-bigpicture_01_2.jpg" alt="" srcset="">
    <div>
    <h2>Price: $1200</h2>
      <h3>Quality: 10</h3>
  <a href="#">Add to cart</a>
  </div> 
     </div>
    
     <div class="product_image">
     <h4>Bean</h4>
  <img src="../images/Multicolor-01-2.3.001-bigpicture_01_2.jpg" alt="" srcset="">
    <div>
    <h2>Price: $1200</h2>
      <h3>Quality: 10</h3>
  <a href="#">Add to cart</a>
  </div> 
     </div>

     </div>

   


     </div>
   </div>

</body>
</html>