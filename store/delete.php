<?php 
require_once "../core/core.php";

if(isset($_GET['delete']))
{
    $delete = $_GET['delete'] ?? null;
    

    $delete_product = $conn->prepare("DELETE FROM product WHERE id = ?");
    
    if($delete_product->execute([$delete]))
    {
        header("Location: ../views/product.php");
        exit();
    }

}