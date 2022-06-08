<?php  
require_once "../core/core.php";
$users = $_SESSION['id'];
$store_auth = $conn->prepare("SELECT * FROM product WHERE auth_keys = ?");
$store_auth->execute(array($users));
$store_check_auth_keys = $store_auth->fetch(PDO::FETCH_ASSOC);
