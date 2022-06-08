<?php 
require_once '../store/store.auth.check.php';
  if (isset($store_check_auth_key['store_auth'])) {
     header("www-Authenticate: Store page= \"Private Place\"");
     header("HTTP/1.0 401 Unauthorized");
     echo "OOp!! Seem You already have a store";
     die();
  }

?>