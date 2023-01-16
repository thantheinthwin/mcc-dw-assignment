<?php 

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "gwsc";

    $connection = mysqli_connect($host, $user, $password, $db);

    if(mysqli_connect_error()){
        die(mysqli_connect_error());
    }
?>