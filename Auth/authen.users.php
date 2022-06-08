<?php 

require_once "../core/core.php";
if (isset($_SESSION['vkeys'])) {
    header("Location: ../views/home.php");
}