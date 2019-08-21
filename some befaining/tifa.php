<?php
require 'chek_require.php';


$name = $_POST['user_name'];
$pass = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];





if(isset($_POST['submit'])){
  // code...






//---------------------------------------------------------
//$ds has true if the conect is done
// the first if statment to see if the connect sucsess or not
if (!$ds) {
  // code...
  echo "faild";
}
else {
  echo "sucsess connection";
}

$query = "insert into db_tifa(user_name,password,email,phone)
   values('$name','$pass','$email','$phone');";

if (mysqli_query($ds,$query)) {
   //code...
  echo " insert ";
}

else {
  echo " insert faild";
}


}
else{echo"hjghjg";}

// The mysql_query() function executes a query on a MySQL database.
// take the query that we put in a variable and execute on our database
//************our steps****************
//1-make our form (html & css) normally.
//2-give them an action to connecct with our php file.
//3-connect with database to detrmine which database we will use.
//4-convert input from the form to variables in php.
//5-the first if statment to see if the connect sucsess or not.
//6-make a query variable and wright query on it.
//-7mysqli_query() function to insert to our database

 ?>
