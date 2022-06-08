<?php 

require_once "../core/core.php";


if (isset($_POST['upload'])) {
    $id = $_SESSION['id'];
    $pname = ucfirst($_POST['name']);
    $price = $_POST['price'];
    $quality = $_POST['quality'];
  
    $file = $_FILES['image'];
    $filename = $_FILES['image']['name'];
    $file_tmp_name = $_FILES['image']['tmp_name'];
    $file_error = $_FILES['image']['error'];
    $file_size = $_FILES['image']['size'];

    $file_exe = explode('.', $filename);
    $file_actual_name = strtolower(end($file_exe));

    $allowed = ['jpg', 'jpeg', 'png', 'gif'];
    $msg = ['pname' => '', 'price' => '', 'quality' => '', 'image' => '', 'success' => ''];

    if(empty($pname))
    {
     $msg['pname'] = 'Add product name. please try again';
     
    } else 
    {
        if(empty($price))
        {
         $msg['price'] = 'Add price for this product.  try again';
        } else 
        {
            if(empty($quality))
        {
         $msg['quality'] = 'Add quality for this product.  try again';
        } else 
        {
            if (in_array($file_actual_name, $allowed)) {
                if($file_size < 1000000)
                {
                 if ($file_error === 0) {
                     $uniqid = uniqid('', true).".".$file_actual_name;
                     $storage = "../store_profile/".$uniqid;
                     if(move_uploaded_file($file_tmp_name, $storage))
                     {
                       $insert_query = $conn->prepare("INSERT INTO product (product_id, productName, price, quality, productImage) VALUES (?,?,?,?,?)");
                      if($insert_query->execute([$id, $pname, $price, $quality, $uniqid]))
                      {
                        $msg['success'] = "Product was uploaded successfully";
                      } else
                      {
                        $msg['success'] = "Something went wrong try again";
                      }
                     }
                 } else
                 {
                    $msg['image'] = "An error occur trying to upload this file.  try again";
                 }
                } else{
                    $msg['image'] = "File is too big.  try again";
                }
            } else 
            {
                $msg['image'] = "Sorry can't uploade this file.  try again";
            }
        }
        }
    }
}
?>
