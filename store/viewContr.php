<?php
require_once "../core/core.php";

if(isset($_POST['update']))
{

 $id = $_SESSION['id'];
 $account = $_POST['bank_name'];
 $bank_number = $_POST['bank_number'];
 $phone = $_POST['phone'];
 $country = $_POST['country'];
 $file = $_FILES['image'];
 $filename = $_FILES['image']['name'];
 $file_tmp_name = $_FILES['image']['tmp_name'];
 $file_error = $_FILES['image']['error'];
 $file_size = $_FILES['image']['size'];
 $msg = ['error' => '', 'success' => ''];
 $exc_image = explode('.', $filename);
 $actual_exc_image = strtolower(end($exc_image));

 $allowed = ['jpg', 'jpeg', 'png', 'gif'];
 $push = [];


 $msg = ['error' => '', 'account' => ' ', 'bank_number' => '', 'phone' => '', 'country' => '',  'success' => ''];
  

   
    if(empty($account))
    {
       $msg['account'] = "Please Provide a valid account name.. plaease try again..";
    } else{
        
            if (!preg_match("/^[0-9]*$/", $bank_number)) {
                $msg['bank_number'] = "Account number not valid.. plaease try again..";
            } else 
            {
                if (!preg_match("/^[0-9]*$/", $phone)) {
                    $msg['phone'] = "We Can't validate this number.. plaease try again..";
                } else 
                {
                    if (strlen($phone) < 11 || strlen($phone) > 15) {
                        $msg['phone'] = "Check number again.. plaease try again..";
                    }  else 
                        {
                          if (empty($country)) {
                            $msg['country'] = "People would like to know your location.. plaease try again..";
                          } else 
                          {
                              if(!preg_match("/^[a-zA-Z]*$/", $country))
                              {
                                $msg['country'] = "Please enter the a valid country name.. plaease try again..";
                              } else 
                              {
                                $update = $conn->prepare("UPDATE store SET store_account_num = :store_account_num WHERE store_id = :store_id");
                                $update->bindParam(':store_account_num', $account);
                                $update->bindParam(':store_id', $id);
                                if ($update->execute()) {
                                    $update_bank = $conn->prepare("UPDATE store SET store_bank_name = :store_bank_name WHERE store_id = :store_id");
                                    $update_bank->bindParam(':store_bank_name', $bank_number);
                                    $update_bank->bindParam(':store_id', $id);
                                    if ($update_bank->execute()) {
                                        $update_contact = $conn->prepare("UPDATE store SET store_contact = :store_contact WHERE store_id = :store_id");
                                    $update_contact->bindParam(':store_contact', $phone);
                                    $update_contact->bindParam(':store_id', $id);
                                    if ($update_contact->execute()) {
                                        if (in_array($actual_exc_image, $allowed)) {
                                            if ($file_error === 0) {
                                                   if ($file_size < 1000000) {
                                                       $newfilename = uniqid('', true).".".$actual_exc_image;
                                                       $storage = '../store_profile/'.$newfilename;
                                                       $move_file = move_uploaded_file($file_tmp_name, $storage);
                                                       if ($move_file) {
                                                         $update_store_profile = $conn->prepare("UPDATE store SET store_profile = :store_profile WHERE store_id = :store_id");
                                                         $update_store_profile->bindParam(':store_profile', $newfilename);
                                                         $update_store_profile->bindParam(':store_id', $id);
                                                         if ($update_store_profile->execute()) {
                                                            $update_country = $conn->prepare("UPDATE store SET store_country = :store_country WHERE store_id = :store_id");
                                                            $update_country->bindParam(':store_country', $country);
                                                            $update_country->bindParam(':store_id', $id);
                                                            $update_country->execute();
                                                            header("Location: ../views/dashboard.php");
                                                            exit();
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
                                    }
                                }
                                      }
                          }
                        }
                    }
                }
            }
        }
    

    
 

