<?php
    session_start();
    if(empty($_SESSION["admin_kadi"])){
        header("location: login.php");
    }
?>