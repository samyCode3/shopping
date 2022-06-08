<?php 
require_once "../core/core.php";

$link = $_GET['id'] ?? null;


$s = $conn->prepare("SELECT * FROM store WHERE store_id = :store_id");

$s->bindParam(':store_id', $link);
$s->execute();
$s_fetch = $s->fetch(PDO::FETCH_ASSOC);

print_r($s_fetch['store_name']);

