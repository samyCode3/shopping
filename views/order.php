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
      <a href="#">
        <span class="fas fa-dashboard"></span>
        <h3>Dashboard</h3>
      </a>
      <a href="#" class="active">
        <span class="fas fa-person"></span>
        <h3>Customers</h3>
      </a>

      <a href="product.php">
        <span class="fas fa-add"></span>
        <h3>product</h3>
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
        <span class="fas fa-trash"></span>
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
<h1>Customers Order</h1>

  <table>
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Product Number</th>
        <th>Payment</th>
        <th>Status</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<tr>
  <td>Rice</td>
  <td>8654</td>
  <td>Due</td>
  <td class= "warning">Panding</td>
  <td class= "primary">Details</td>
</tr>
<tr>
  <td>Rice</td>
  <td>8654</td>
  <td>Due</td>
  <td class= "warning">Panding</td>
  <td class= "primary">Details</td>
</tr>
    </tbody>
  </table>
  <a href="">Show all</a>
</div>
 </main>
 <!-- end of main -->

    </div>
  </div>
  <!-- end of  -->
 </div>

</div>
<script src = "../v1/v1/script/dashboard.js"></script>
</body>
</html>