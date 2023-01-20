<?php 
    if(!isset($_SESSION['admin_id']) && !isset($_SESSION['user_id'])){
        echo "<script>";
        echo "window.location.href = '../public/login.php'";
        echo "</script>";
    }
?>