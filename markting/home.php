
<?php 
 
 // Session Validation.
//session_start();
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
              <a href="addBook.php"> <button  class="btn btn-primary btn-sm"> Add Book </button>  </a> 
              <br> <br>
             

              <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Book Name</th>
                        <th scope="col">Auther</th>
                        <th scope="col">Language</th>
                        
                        
                      </tr>
                    </thead>
                    <tbody>   
    



<?php 

require 'conn.php';
global $conn;


$query = " SELECT * FROM `books` ORDER BY id desc;";
$runQuery = mysqli_query($conn, $query);
if($runQuery)
{
    //echo ' runned';
}else{
    echo 'not runned';
}


foreach ($runQuery as $element) {
    // code...
    $id = $element['id'];

    //echo '<button onclick="">Delete</button>';
    

    ?>


    <tr>
      <th scope="row">1</th>
      <td> <?php echo $element['bookName'] ?></td>
      <td> <?php echo $element['bookAuth'] ?> </td>
      <td> <?php echo $element['lang'] ?> </td>
      <td>  </td>
      <td></td>
      <td> 
        <a href="delete.php?code=<?php echo $id; ?>"> <button class="btn btn-danger btn-sm"> Delete </button> </a>
        <a href="update.php?code=<?php echo $id; ?>"> <button class="btn btn-secondary btn-sm"> update </but
      </td>
    </tr>
                    
                    





 <?php
    
  }
 ?>

</tbody>
</table>
</body>
</html>