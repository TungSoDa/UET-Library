<?php session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
function connectServer(): mysqli
{
    $servername = "localhost";
    $username = "root";
    $password = "myDatabase@3699";
    $port = "3306";
    $connect = new mysqli($servername, $username, $password, "", $port);
    if ($connect->connect_error) {
        die("Connection failed.");
    } else {
        return $connect;
    }
}
