<?php  

require_once "../core/core.php";

if (isset($_POST['upload'])) {
    $id = $_SESSION['id'];
    
    $file = $_FILES['image'];
    $filename = $_FILES['image']['name'];
    $file_tmp_name = $_FILES['image']['tmp_name'];
    $file_error = $_FILES['image']['error'];
    $file_size = $_FILES['image']['size'];
    $msg = ['error' => '', 'success' => ''];
    $exc_image = explode('.', $filename);
    $actual_exc_image = strtolower(end($exc_image));

    $allowed = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array($actual_exc_image, $allowed)) {
        if ($file_error === 0) {
               if ($file_size < 1000000) {
                   $newfilename = uniqid('', true).".".$actual_exc_image;
                   $storage = '../profile/'.$newfilename;
                   $move_file = move_uploaded_file($file_tmp_name, $storage);
                   if ($move_file) {
                     $update = $conn->prepare("UPDATE users SET profile = :profile WHERE id = :id");
                     $update->bindParam(':profile', $newfilename);
                     $update->bindParam(':id', $id);
                     if ($update->execute()) {
                        $msg['success'] = "File is successfully Uploaded";
                     } else 
                     {
                         unlink($storage);
                     }

                   }
               } else 
               {
                   $msg['error'] = "This file is too big. please try again.....";
               }
        } else 
        {
            $msg['error'] = "Error Occur trying to upload this file. please try again.....";
        }
    } else 
    {
      $msg['error'] = "Can't Upload this type of file. please try again.....";
    }
    
}