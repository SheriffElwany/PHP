<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db_name = "message";
$conn = mysqli_connect($host,$user,$pass,$db_name);

if ($conn) {
    # code...
    echo 'connected';
}

?>