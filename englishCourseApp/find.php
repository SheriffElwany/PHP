





<?php 
 
 // Session Validation.
session_start();
require "layout.php";
 

if (isset($_SESSION["admin_password_session"]) && isset($_SESSION["admin_name_session"])) {
  # code...
  //echo "come with session";

}else{
 
 //header to go to sign in
 header('Location: index.html');
 die();

 

}

 
 ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<br>
<form class="form-inline" method="POST" action="find.php">
<center>
<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="id"> 

    <button name="submit" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</center>
  </form>

              <!-- body-->
              <br>
             
             

              <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Group</th>
                        <th scope="col">Level</th>
                        
                        
                      </tr>
                    </thead>
                    <tbody>   
    



<?php 

require 'conn.php';
global $conn;



if(isset($_POST['submit']))
{
    $stu_id = $_POST['id'];

$query = " SELECT * FROM students WHERE `stu_id`= '$stu_id';";
$runQuery = mysqli_query($conn, $query);
if($runQuery)
{
    //echo ' runned';
}else{
    echo 'not runned';
}


foreach ($runQuery as $element) {
    // code...
    $id = $element['stu_id'];

    //echo '<button onclick="">Delete</button>';
    

    ?>


    <tr>
      <th scope="row">1</th>
      <td> <?php echo $element['name'] ?></td>
      <td> <?php echo $element['group_name'] ?> </td>
      <td> <?php echo $element['level'] ?> </td>
      <td>  </td>
      <td></td>
      <td> 
        <a href="delete.php?code=<?php echo $id; ?>"> <button class="btn btn-danger btn-sm"> Delete </button> </a>
        <a href="details.php?code=<?php echo $id; ?>"> <button class="btn btn-success btn-sm "> Details </button> </a>

      </td>
    </tr>
                    
                    





 <?php
    
  }
}else {
    //echo 'not';
}
 ?>

</tbody>
</table>
</body>
</html>