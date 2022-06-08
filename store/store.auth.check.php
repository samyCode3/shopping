<?php  
require_once "../core/core.php";
$users = $_SESSION['id'];
$store_auth = $conn->prepare("SELECT * FROM store WHERE store_id = ?");
$store_auth->execute(array($users));
$store_check_auth_key = $store_auth->fetch(PDO::FETCH_ASSOC);


?>