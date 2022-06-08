<?php 
require_once "../core/core.php";

if (isset($_POST['store_reg'])) {

 $id = $_SESSION['id'];
 $fname = $_POST['fname'];
 $name = $_POST['store_name'];
 $email = $_POST['store_email'];
 $authKey = md5(time().$email);
 $user_notification = "Hi Would u like to visit $name ??";
 $notification = "Hi $fname you just created your first store..";
 
  $error = ['error' => ' ', 'email' => ' ', 'auth' => ''];
if (empty($name)) {
    $error['error'] = "Store name is required.. please try again.....";
} else 
{
    if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
        $error['error'] = "Special Characters not allowed.. please try again.....";
    } else 
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $error['email'] = "Enter valid email. please try again.....";
        } else 
        {
           $query_fetch_auth = $conn->prepare("SELECT * FROM users WHERE store_name = :store_name or store_email = :store_email");
           $query_fetch_auth->bindParam(':store_name', $name);
           $query_fetch_auth->bindParam(':store_email', $email);
           $verify_auth = $query_fetch_auth->fetch(PDO::FETCH_ASSOC);
           if ($verify_auth > 0) {
               $error['auth'] = "You can't create two store";
           } else 
           {

        
            $insert_query = $conn->prepare("INSERT INTO store (store_name, store_email, store_id, store_auth, notification, users_notification) VALUES
            (:store_name, :store_email, :store_id, :store_auth, :notification, :users_notification)");
            $insert_query->bindParam(':store_name', $name);
            $insert_query->bindParam(':store_email', $email);
            $insert_query->bindParam(':store_id', $id);
            $insert_query->bindParam(':store_auth',  $authKey);
            $insert_query->bindParam(':notification',  $notification);
            $insert_query->bindParam(':users_notification',  $user_notification);
            
           
            if ($insert_query->execute()) {
                header("Location: ../views/home.php");
                exit;
            } else 
            {
               header("Location: ../views/store.php");
               exit(); 
            }
        
           }
    }
}
}
} 