<?php

//db connect.
$server_host = 'localhost';
$server_user = 'root';
$server_password = '';
$db_name = 'test';
$db_connect = mysqli_connect($server_host,$server_user,$server_password, $db_name);
//conected.

//form input.
$user_name = $_POST['user_name'];
$user_password = $_POST['user_password'];
// form input done.

//button action start :).
if (isset($_POST['sign_up_botton'])) {
  // code...

  //my query string code to injection.
  $query = "insert into first_sign_up (user_name,password) values('$user_name','$user_password');";
//queru seem to be an erorr.

//see if the connection to database work or not
  if ($db_connect) {
    // code...
    echo "connected";
  }
  else {
    echo "connect faild";
  }
//connection with database done.

//insert to database

  if (mysqli_query($db_connect,$query)) {

    // code...
    echo " &&  insert done";
    echo "<br> <br> <b>wellcome to us </b>";
  }
  else {
    echo "insert faild";
  }
//insert finally done.


}

 ?>
