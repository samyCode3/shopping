<?php 

require_once '../store/store.auth.check.php';
if(isset($store_check_auth_key['store_auth']))
{
    echo '<a class="list_link" href="../views/views.php"><li>Set up store </li></a>';
} else 
{
    echo '<a class="list_link" href="../views/store.php"><li>Create Store</li></a>';
}

?>