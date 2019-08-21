<?php


echo $id = $_GET['id'];

require 'conn.php';
global $conn;

$query = "DELETE FROM users WHERE id = '$id' ;";
$runQuery = mysqli_query($conn , $query);

if ($runQuery) {
    # code...
    header('location: hom.php');
}else{
    echo "not working";
}





?>