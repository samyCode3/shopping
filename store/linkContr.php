<?php 

require_once "../core/core.php";

if (isset($_POST['btn_link'])) {
   
    $id = $_SESSION['id'];
    $link = $_POST['link'];
   $array = [];
   $error = ['error' => ''];
    if(empty($link)) 
    {
    $error['error'] = "You can't create an empty link";
    } else 
    {
    $select_update = $conn->prepare("SELECT * FROM store WHERE store_link = ? ");
    
    $select_update->execute([$link]);
    $select_update_fetch = $select_update->fetch(PDO::FETCH_ASSOC);
   
        if ($select_update_fetch > 0) {
           array_push($array, $select_update_fetch);
           $error['error'] = "This link is already used";
        } else 
        {
            $update =  $conn->prepare("UPDATE store SET store_link = :store_link WHERE store_id = :store_id");
            $update->bindParam(':store_link', $link);
            $update->bindParam(':store_id', $id);
            if ($update->execute()) {
                header("Location: ../views/notification.php");
                exit();
            } else 
            {
                header("Location: ../views/linkCreator.php");
                exit();
            }
        }
    }

       
    
}