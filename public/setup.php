<?php
    $connection = mysqli_connect("localhost", "root","");
    if (mysqli_connect_error()) {
        die(mysqli_connect_error());
    }    
    
    $query = "CREATE DATABASE IF NOT EXISTS GWSC; USE GWSC;";
    
    $query .= "CREATE TABLE IF NOT EXISTS user(user_id int(1) auto_increment primary key, "
            . "firstname varchar(30) not null, lastname varchar(30) not null, "
            . "username varchar(30) not null, email char(50) not null unique, "
            . "password char(150) not null, dateofbirth date not null,gender varchar(10) not null; ";
    
    $query .= "CREATE TABLE IF NOT EXISTS admin(adminid int(5) primary key, "
            . "adminname varchar(30) not null, email char(50) not null unique, "
            . "password char(150) not null;";
			    
    
    $enc_pass = password_hash("admin", PASSWORD_DEFAULT);
    $query .= "INSERT IGNORE INTO admin VALUES(1, 'admin', 'admin@gmail.com', '$enc_pass');";
    $status=mysqli_multi_query($connection, $query);
	if($status)
	{
		echo "===Success Database===";
	}
    mysqli_close($connection);
?>