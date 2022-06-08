<?php 

require_once "../core/core.php";

if(isset($_GET['page']))
{
    $page = $_GET['page'];

} else{
    $page = 1;
}
$id = $_SESSION['id'];
$num_par_page = 12;
$start = ($page - 1) * 12;
$query_product_row = $conn->prepare("SELECT * FROM product WHERE product_id  = ?");
if($query_product_row->execute([$id]))
{
    $fetch_row = $query_product_row->rowCount();
    $divide_method = ceil($fetch_row / $num_par_page);
  
}



$query_product = $conn->prepare("SELECT * FROM product WHERE product_id = ? LIMIT $start, $num_par_page");
if($query_product->execute([$id]))
{
    $fetch = $query_product->fetchAll(PDO::FETCH_ASSOC);
    if ($fetch < 0) {
        echo "No post found";
    }
  
}