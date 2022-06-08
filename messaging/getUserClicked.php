
<?php

require_once "../core/core.php";

$getMessageId = $_GET['id'];
$admin_id  = $_SESSION['id'];
$select_messagers = $conn->prepare("SELECT * FROM users WHERE id = ?");
$select_messagers->execute([$getMessageId]);
$fetch_users = $select_messagers->fetch(PDO::FETCH_ASSOC);

if (isset($_POST['message'])) {
   $message = $_POST['message'];
    if (empty($message)) {
        echo "can't send empty message";
    } else 
    {
        $message_camp = $conn->prepare("INSERT INTO message (sender_id, receiver_id, messages) VALUES (?,?,?)");
        $message_camp->execute([$admin_id, $getMessageId, $message]);
           
        
    }
   
}

?>

<?php 
 $select_admin_message = $conn->prepare("SELECT * FROM message WHERE sender_id = ?" );
 $select_admin_message->execute([$admin_id]);
 $fetch_admin_message = $select_admin_message->fetchAll(PDO::FETCH_ASSOC);
 foreach ($fetch_admin_message as $sender) {
     echo $sender['messages'];
 } 

?>
<?php 
 $receiver_admin_message = $conn->prepare("SELECT * FROM message WHERE receiver_id = ?" );
 $receiver_admin_message->execute([$admin_id]);
 $fetch_receiver_admin_message = $receiver_admin_message->fetchAll(PDO::FETCH_ASSOC);
 foreach ($fetch_receiver_admin_message as $receiver) {
   
     echo $receiver['messages'];
 } 
 
 echo $admin_id;
?>