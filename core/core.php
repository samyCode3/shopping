<?php
   

   require_once "../connection/database.php";
   require_once "sesion_starter.php";
try {
    $conn = new PDO ("mysql:host=$host;dbname=$dbname", "$user","$pass");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   


} catch (PDOException $e) {
  

    echo "connection failed".$e->getMessage();
}
