<?php 

require_once "../core/core.php";
if (isset($_POST['register'])) {
   $fname = ucfirst($_POST['fname']);
   $uname = ucfirst($_POST['uname']);
   $email = $_POST['email'];
   $password= $_POST['password'];
   $confirm= $_POST['confirm'];
   $vkey = md5(time().$fname);

  
   $error = ['fname' => '', 'uname' => '', 'email' => '', 'password' => '', 'confrim' => ''];

   if(empty($fname))
   {
       $error['fname'] = "Firstname is empty please try again";
   } else 
   {
       if(empty($uname))
       {
        $error['uname'] = "Username is empty please try again";
       } else 
       {
           if(!preg_match("/^[a-zA-Z0-9]*$/", $uname))
           {
            $error['uname'] = "Speacial character are not allowed";
           } else
           {
               if(!filter_var($email, FILTER_VALIDATE_EMAIL))
               {
                $error['email'] = "Email is not valid. Please try again";
               } else{
                   $check_Aleady_used_email = $conn->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
                   $check_Aleady_used_email->bindParam(':email', $email);
                   $check_Aleady_used_email->execute();
                   $check_Aleady_used_email_complete = $check_Aleady_used_email->fetch(PDO::FETCH_ASSOC);

                   if ($check_Aleady_used_email_complete > 0) {
                    $error['email'] = "Email is Already taken. Please try again";
                   }else 
                   {
                       if (strlen($password) < 8) {
                        $error['password'] = "More than eight characters expected";
                       } else
                       {
                           if (preg_match("/^[a-zA-Z0-9]*$/", $password)) {
                            $error['password'] = "Choose a stronger password. Please try again";
                           } else 
                           {
                               if ($password != $confirm) {
                                $error['password'] = "Password confirmation not the same. please try again.....";
                               } else 
                               {
                                   $password_hash = password_hash($password, PASSWORD_DEFAULT);
                                   $insert_query = $conn->prepare("INSERT INTO users (fullname, username, email, password, confirm, vkeys) VALUES (:fullname, :username, :email, :password, :confirm, :vkeys)");
                                   $insert_query->bindParam(':fullname', $fname);
                                   $insert_query->bindParam(':username', $uname);
                                   $insert_query->bindParam(':email', $email);
                                   $insert_query->bindParam(':password', $password_hash);
                                   $insert_query->bindParam(':confirm', $password_hash);
                                   $insert_query->bindParam(':vkeys', $vkey);
                                   if ($insert_query->execute()) {
                                     header("Location: ../views/home.php");
                                     exit();
                                   } else 
                                   {
                                    $error['confirm'] = "Registration not successfull. please try again.....";
                                   }
                               }
                           }
                       }
                   }
               }
           }
       }
   }
 
}