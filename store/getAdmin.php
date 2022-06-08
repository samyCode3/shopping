<?php

require_once "../core/core.php";

$server = $_SERVER['REQUEST_METHOD'];

if(isset($server) == "GET")
{
    $id = $_SESSION['id'];
  $select = $conn->prepare("SELECT * FROM users WHERE id != ?");
  $select->execute([$id]);
  $fetch = $select->fetchAll(PDO::FETCH_ASSOC);  
 
}