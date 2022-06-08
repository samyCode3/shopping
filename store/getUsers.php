<?php

require_once "../core/core.php";

$body = file_get_contents("php://input");
$body = json_decode($body, true);
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: X-Requested-With');
header('Content-Type: application/json');
$server = $_SERVER['REQUEST_METHOD'];

if(isset($server) == "GET")
{
  $select = $conn->prepare("SELECT * FROM users");
  $select->execute();
  $fetch = $select->fetchAll(PDO::FETCH_ASSOC);  
  echo json_encode($fetch);
}