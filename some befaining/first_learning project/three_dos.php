<?php

require 'db_connect.php';

if (isset($_POST['login'])) {
  if (isset($_POST['username']) && isset($_POST['password']) ) {
     $username  =  $_POST['username'] ;
     $password = $_POST['password']   ;

//****************************************************************
global $ds ;
$query = "SELECT `user_name`, `password` From `db_tifa` ";

$run_query = mysqli_query($ds, $query);

while ($rows = mysqli_fetch_assoc($run_query)) {
  header("location:http://localhost/our_page.php");

}





//this else for the second if statment-------------------------------

  }else
  {
    echo "please type username and the password";
  }

}


//------the sign_up ------------------------------------------------------


if (isset($_POST['sign'])) {
  // code...
echo "hellooooo";

}

 ?>


<html>

<head>
  <title>Home</title>
  <link rel="stylesheet" href="tttt.css">
</head>

<body>


       <form action="three_dos.php" method="POST" >

     <div class="form">

      <div class="my_img">
           <img src="tifa.jpg" class="tifa_image" >
      </div>

       <div class="form_info">
       name:  <input type="text" name="username"  placeholder="type username"><br><br><br>


       password: <input type="password" name="password" placeholder="type your password"><br><br><br>

       <input type="submit" name="login" value="login" ><br><br>

     </div>
  </div>

  <div class="sign_up">
    user name:            <input type="text" name="user_name"  placeholder="user name"><br><br><br>
    pasword &nbsp; :      <input type="text" name="password"  placeholder="password"><br><br><br>
    password:             <input type="text" name="password"  placeholder="repassword"><br><br><br>
    email &nbsp; &nbsp; : <input type="text" name="email"  placeholder="email"><br><br><br>
    phone &nbsp; &nbsp;:  <input type="text" name="phone"  placeholder="phone"><br><br><br>
    <input type="submit" name"sign" value="sign up">

  </div>


<div class="show">
<h1> helloooshow </h1>



</div>
</form>

</body>


</html>
