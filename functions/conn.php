<?php

$server_name = "localhost";
$server_uname = "root";
$server_password = "pa55";
$db_name = "libra";
$conn = mysqli_connect($server_name, $server_uname, $server_password, $db_name);

if(!$conn){
    echo "Connection Failed!";
}