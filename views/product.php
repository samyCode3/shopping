<?php 

require_once "../Auth/auth.users.php";
require_once "../core/sesion_starter.php";
require_once "../v1/v1/logout.v1.php";
require_once "../v1/v1/users.v1.php";
require_once "../store/productContr.php";
require_once "../store/getProduct.php";
require_once "../store/productCart.php";
require_once "../store/delete.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product Category</title>
    <link rel="stylesheet" href="../css2/dashboard.css">
    <link rel="stylesheet" href="../css2/css/all.css">
    <link rel="stylesheet" href="../css2/css/all.min.css">
    <link rel="stylesheet" href="../css2/css/solid.css">
  </head>
<body>

<div class="container">
 <aside>
   <div class="top">
     <div class="logo">
       <img src="../images/index.jpg" alt="">
       <h2>Sho<span class="danger">pify</span></h2>
     </div>
     <div class="close" id="close-btn">
       <i class="fas fa-close"></i>
     </div>
   </div>
   <div class="sidebar">
      <a href="dashboard.php">
        <span class="fas fa-dashboard"></span>
        <h3>Dashboard</h3>
      </a>
      <a href="#" class="active">
        <span class="fas fa-person"></span>
        <h3>Customers</h3>
      </a>

      <a href="product.php">
        <span class="fas fa-add"></span>
        <h3>Add Product</h3>
      </a>

      <a href="#">
        <span class="fas fa-receipt"></span>
        <h3>Order</h3>
      </a>

      <a href="#">
        <span class="fas fa-bar-chart"></span>
        <h3>Analytics</h3>
      </a>
      <a href="#">
        <span class="fas fa-message"></span>
        <h3>Messages</h3>
        <span class="message-count">26</span>
      </a>
      <a href="#">
        <span class="fas fa-info"></span>
        <h3>Notification</h3>
        <span class="message-count">26</span>
      </a>
      <a href="#">
        <span class="fas fa-credit-card-alt"></span>
        <h3>PayPal</h3>
      </a>
      <a href="#">
        <span class="fas fas fa-trash"></span>
        <h3>Report</h3>
      </a>

      <a href="#">
        <span class="fas fa-cog"></span>
        <h3>Settings</h3>
      </a>

      <a href="#">
        <span class="fas fa-sign-out-alt"></span>
        <h3>Logout</h3>
      </a>
    </div>

 </aside>
 <!-- End of Aside -->
 <main>
<h1>Create Product</h1>
<div class="date">
  <input class="dater" type="date">
  <i class="fas fa-cloud-sun-rain"></i>
    
</div>

<div class="main_product_cont">
<form id = "form" action="" method = "post" enctype="multipart/form-data">
<div class="cart_input">

  <div>
    <i  class="fas fa-close" id= "cancel"></i>
<input type="file" class="input_cart_file" name="image" >
  </div>
<div>
<input type="text" class="input_cart" name="name" placeholder= "Enter product name" value = "<?php if(isset($msg)) {echo $pname;} ?>">
<div class="error">
 <?php 
 if(isset($msg)){ ?>
   <?php echo $msg['pname'] ?>
 <?php }
 ?>
 </div>
  </div>
  <div>
<input type="text" class="input_cart" name="price" placeholder= "Enter product price" value = "<?php if(isset($msg)) {echo $price;} ?>">
<div class="error">
 <?php 
 if(isset($msg)){ ?>
   <?php echo $msg['price'] ?>
 <?php }
 ?>
 </div>
  </div>
  <div>
<input type="text" class="input_cart" name="quality" placeholder= "Enter product quality" value = "<?php if(isset($msg)) {echo $quality;} ?>">
<div class="error">
 <?php 
 if(isset($msg)){ ?>
   <?php echo $msg['quality'] ?>
 <?php }
 ?>
 </div>
  </div>
 <div>
   <button type="submit" class="upload" name="upload">Upload</button>
   <?php 
 if(isset($msg)){ ?>
   <?php echo $msg['success'] ?>
 <?php }
 ?>
 </div>
   
  
  </div>
  
  </form>

<div class="pController">
 
    <?php 
foreach($fetch as $get)
{ ?>
 <div class="product">
 <h4 class="ProductH4"> <?php echo $get['productName'] ?></h4>
 <img src="../store_profile/<?php echo $get['productImage'] ?>" alt="">
 <h3>Price : $<?php echo $get['price'] ?></h3>
 <h3>Quality : <?php echo $get['quality'] ?></h3>
 <h3><?php echo $get['likes'] ?> Likes</h3>
 <a class="edit" href="#?id=<?php echo $get['id'] ?>">Edit</a>
 <a class="del" href="product.php?delete=<?php echo $get['id'] ?>">Delete</a> 



 </div>

        
<?php }

?>


</div>

<a class="productBtn" href = "#">Add Product</a>
<br>
<div class="action">
<?php 
if ($page > 1) {
  echo "<a class='previous' href='product.php?page=".($page - 1)."'>Previous</a>";
}
for ($i=1; $i < $divide_method ; $i++) { 
  echo "<a class='loop' href='product.php?page=".$i."'>$i</a>";
 }
 if ($i > $page) {
  echo "<a  class='next' href='product.php?page=".($page + 1)."'>Next</a>";
}

?>
</div>
 </main>
 <!-- end of main -->
 <div class="right">
  <div class="top">
    <button id="menu-btn">
    <i class="fas fa-person"></i>
    </button>
    <div class="theme-toggler">
    <i class="fas fa-sun" id="active"></i>
    <i class="fas fa-moon"></i>

    </div>

    <div class="profile">
      <div class="info">
        <p>Hey <b><?php echo $_SESSION['username'] ?></b></p>
        <small class="text-muted">Admin </small>
      </div>
      <div class="profile-phote">
       <?php echo "<img src='../profile/$query_fetch_user[profile] ?>'>"  ?> 
      </div>
    </div>
  </div>

  <div class="recent-updates">
    <h2>Recent Updates</h2>
    <div class="updates">
      <div class="update">
      <div class="profile-phote">
        <img src="../images/Multicolor-01-2.3.001-bigpicture_01_1.jpg" alt="">
      </div>
      <div class="message">
        <p><b>Samson onifade</b>Receive his product</p>
        <small class="text-muted">2 minute ago</small>
      </div>
      </div>
    </div>
  </div>
  <div class="sales-analytics">
    <h2>Sales Analytics</h2>
    <div class="item online">
      <div class="icon">
      <i class="fa fa-shopping-cart"></i>
      </div>

      <div class="right">
        <div class="info">
          <h3>ONLINE ORDERS</h3>
          <small class="text-muted">Last 24 Hours</small>
        </div>
        <h5 class="success">+49%</h5>
          <h3>3849</h3>
        </h5>
      </div>
    </div>
    <div class="item offline">
      <div class="icon">
      <i class="fa fa-shopping-cart"></i>
      </div>
      
      <div class="right">
        <div class="info">
          <h3>OFFLINE ORDERS</h3>
          <small class="text-muted">Last 24 Hours</small>
        </div>
        <h5 class="danger">+9%</h5>
          <h3>3849</h3>
        </h5>
      </div>
    </div>
    <div class="item customers">
      <div class="icon">
      <i class="fa fa-person"></i>
      </div>
      
      <div class="right">
        <div class="info">
          <h3>NEW CUSTOMERS</h3>
          <small class="text-muted">Last 24 Hours</small>
        </div>
        <h5 class="success">+9%</h5>
          <h3>3849</h3>
        </h5>
      </div>
    </div>
    <div class="item add-product">
      <div>
        <i class="fa fa-add"></i>
        <h3>Add Product</h3>
      </div>
    </div>
  </div>
  <!-- end of  -->
 </div>

</div>
<script src = "../v1/v1/script/product.js"></script>
<script src = "../v1/v1/script/dashboard.js"></script>
</body>
</html>
   
</body>
</html>