<?php
require_once "../core/core.php";
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();

    header("Location: ../views/login.php");
    exit();
}