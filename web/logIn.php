<?php

require "conn.php";
global $conn;


$userName = $_POST['user_name'];
$userPass = $_POST['user_pass'];

$query = "SELECT * FROM `users` WHERE `userName`='$userName' AND `userPass`='$userPass'; ";
$runQuery = mysqli_query($conn , $query);
$rows = mysqli_num_rows($runQuery);

if ($rows > 0) {
    # code...
    echo "<br><br> <center>  Welcome <h3>".$userName." </h3> </center>";
}else{
    header('location: singUp.html');
}

?>