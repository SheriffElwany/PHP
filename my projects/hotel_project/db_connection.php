<?php

$host = 'localhost';
$server_user = 'root';
$server_password = '123456';
$db_name = 'hotel';

$connection = mysqli_connect($host, $server_user, $server_password, $db_name);


if ($connection) {
  echo "connection sucsess <br>";
}

 ?>
