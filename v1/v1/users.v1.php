<?php  
require_once "../core/core.php";
  if (isset($_SESSION['vkeys'])) {
    $id = $_SESSION['id'];
    $array = [];
    $query_user = $conn->prepare("SELECT * FROM users WHERE id = :id");
    $query_user->bindParam(':id', $id);
    $query_user->execute();
    
    $query_fetch_user = $query_user->fetch(PDO::FETCH_ASSOC);
 if  ($query_fetch_user > 0) {
     array_push($array, $query_fetch_user);
 }
  }
   


?>