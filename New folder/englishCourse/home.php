
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

       

              <!-- body-->
              <br>
              <a href="addStudent.php"> <button  class="btn btn-primary btn-sm"> Add Student </button>  </a> 
              <br> <br>
             

              <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Student ID</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Group</th>
                        <th scope="col">Level</th>
                        
                        
                      </tr>
                    </thead>
                    <tbody>   
    



<?php 

require 'conn.php';
global $conn;


$query = " SELECT * FROM `students` ORDER BY stu_id desc;";
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
      <td> <?php echo $element['stu_id'] ?></td>
      <td> <?php echo $element['name'] ?></td>
      <td> <?php echo $element['group_name'] ?> </td>
      <td> <?php echo $element['level'] ?> </td>
      <td>  </td>
      <td></td>
      <td> 
        <a href="delete.php?code=<?php echo $id; ?>"> <button class="btn btn-danger btn-sm"> Delete </button> </a>
        <a href="details.php?code=<?php echo $id; ?>"> <button class="btn btn-success btn-sm"> Details </button> </a>

      </td>
    </tr>
                    
                    





 <?php
    
  }
 ?>

</tbody>
</table>
</body>
</html>