<?php  
require_once "../core/core.php";
$users_id = $_SESSION['id'];
$store_auth_users_notification = $conn->prepare("SELECT * FROM store WHERE store_id != ?");
$store_auth_users_notification ->execute(array($users_id));
$store_check_auth_users_notification  = $store_auth_users_notification ->fetchAll(PDO::FETCH_ASSOC);


?>