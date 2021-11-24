<?php 
session_start();
require "connection.php";
$email = "";
$name = "";

if(isset($_POST['print'])) 
{
    $insert_data = "INSERT INTO users(name, email, password, admin)
                        values('name', 'email@server.com', 'pass', '0')";
    mysqli_query($con, $insert_data);
}
