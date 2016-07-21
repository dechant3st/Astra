<?php 
    require("../DAL/config.php"); 
    unset($_SESSION['user']);
    header("Location: ../"); 
    die("Redirecting to: ../");
?>