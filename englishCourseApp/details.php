





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
    <link rel="stylesheet" href="style.css" >

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>



              <!-- body-->
              <br>
              <br> <br>
             

              <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Group</th>
                        <th scope="col">Level</th>
                        <th scope="col">Pic</th>
                        
                        
                      </tr>
                    </thead>
                    <tbody>   
    



<?php 

require 'conn.php';
global $conn;



$stu_id = $_GET['code'];

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
    $pic = "uploded_images/".$element['pic'];

    //echo '<button onclick="">Delete</button>';
    

    ?>

    <tr>
        
      <th scope="row">1</th>
      <td> <?php echo $element['name'] ?></td>
      <td> <?php echo $element['group_name'] ?> </td>
      <td> <?php echo $element['level'] ?> </td>
      <td> <img class="image" src="<?php echo $pic;?>" > </td>
      <td></td>
      <td> 
        <a href="delete.php?code=<?php echo $id; ?>"> <button class="btn btn-danger btn-sm"> Delete </button> </a>
        <a href="update.php?code=<?php echo $id; ?>"> <button class="btn btn-secondary btn-sm"> update </button> </a>


      </td>
    </tr>
                    
                    





 <?php
    
  }

 


 ?>

</tbody>
</table>
<center><h3>Attendance</h3></center>
<?php 

 //get attendance 

 $query = " SELECT * FROM attendance WHERE `stu_id`= '$stu_id';";
 $runQuery = mysqli_query($conn, $query);
 if($runQuery)
 {
     //echo ' runned';
     
 }else{
     echo 'not runned';
 }
 
 
 foreach ($runQuery as $element) 
 {

    echo '. - lecture Number: '.$element['lec_num']."<br> <hr>";
    echo '. - lecture Number: '.$element['date']."<br> <hr>";
 }

 ?>
<br><br> 
<center><h3>Exams</h3></center>
<br>
<?php
 //get exams
 
 $query = " SELECT * FROM exams WHERE `stu_id`= '$stu_id';";
 $runQuery = mysqli_query($conn, $query);
 if($runQuery)
 {
    // echo ' runned';
 }else{
     echo 'not runned';
 }
 
 
 foreach ($runQuery as $element) 
 {
    echo '. - exam Number: '.$element['exam_num']."<br>";
    echo '. - exam grade: '.$element['grade']."<br>";
    echo '. - exam notes: '.$element['notes']."<br> <hr>";
    
 }

?>
</body>
</html>