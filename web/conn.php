<?php 

$host = 'localhost';
$user = 'root';
$password = '';
$DBName = 'db';

$conn = mysqli_connect($host, $user, $password, $DBName);

if($conn)
{
    echo 'connected';
}


?>