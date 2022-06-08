<?php
require_once  "../core/core.php";


if (isset($_POST['post_product'])) {
  $store_id = $_POST['store_id'];
  $category = ucfirst($_POST['category']);
  $user_id = $_SESSION['id'];
  $error = ['category' => ''];
  $array = [];
  if(empty($category))
  {
    $error['category'] = 'Add product category .. please try again';
  } else 
  {
    $query_cate = $conn->prepare("SELECT * FROM categories WHERE category = ? AND user_id = ?");
    if($query_cate->execute([$category, $user_id]))
    {
      $query_fetch = $query_cate->fetch(PDO::FETCH_ASSOC);
      if($query_fetch > 0)
      {
         array_push($array, $query_fetch);
         header("Location: ../views/product_category.php");
         exit;
      } else 
      {
       $insert_cate = $conn->prepare("INSERT INTO categories (store_id, user_id, category) VALUES (?, ?, ?)");
       if ($insert_cate->execute([$store_id, $user_id, $category])) {
        $error['category'] = 'Category Creation was successfull';
       } else 
       {
        header("Location: ../views/product.php");
        exit();
       } 
      }
    }
  }



   
    
  
  }



