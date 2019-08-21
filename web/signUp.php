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
    echo "<br><br> <center>  Welcome <h3>".$userName." you are already user </h3> </center>";
}else{

//-----------------------------------
$query = "INSERT INTO `users` (`userNAme`, `userPass`) VALUES ('$userName', '$userPass'); ";
$runQuery = mysqli_query($conn , $query);

if ($runQuery) {
    # code...
    echo "<br><br> <center>";
    echo "Welcome <h3>".$userName."</h3><br> yoy are now user ";
    echo " <br><br> <a href='logIn.html'>LogIn Page</a> </center>";
}else{
    echo" Query didn't run";
}

}


?>