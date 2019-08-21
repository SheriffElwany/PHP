<?php 
 
 // Session Validation.
 session_start();
 echo "<button> <a href='wellcomeAdmin.php' style='text-decoration:none'> Home </a> </button>";
 require 'Page.php';


if (isset($_SESSION['admin_password_session']) && isset($_SESSION['admin_name_session'])) {


}else{
 
 //header to go to sign in
 header('Location: index.php');
 die();

 

}

 
 ?>

<html>
 <head>
     <title></title>
     <link rel="stylesheet" type="text/css" href="intro.css">
 </head>
 <body>


 




     
     

     
     <button> <a href='addStudent.php' style="text-decoration:none"> ADD Student </a> </button>

     <br><br><br>



    
 
 </body>
 </html>

 <?php 

require 'DBConn.php';
global $conn;


$query = " SELECT * FROM `student` ORDER BY ID desc;";
$runQuery = mysqli_query($conn, $query);
if($runQuery)
{
    //echo ' runned';
}else{
    echo 'not runned';
}


foreach ($runQuery as $element) {
    $id=         $element['ID'];
    $name =      $element['name'];
    $phone =     $element['phone'];
    $address =   $element['address'];
    $email =     $element['email'];
    $school =    $element['school'];
    $grade =     $element['grade'];
    $age  =      $element['age'];
    $fatherjob = $element['fatherjob'];
    $motherjob = $element['motherjob'];
    $siblings =  $element['siblings'];
    $pic =  $element['pic'];


    echo '&nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp
    &nbsp;&nbsp&nbsp;&nbsp &nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp';
    echo "<img class='dataPic' src='uploded_images/$pic'>";
   


 
?>

    <div class="info">


    <br> ID:          <?php echo $id ; ?>   
    <br> Name:        <?php echo $name; ?>   
    <br> Phone:       <?php echo $phone; ?>  
    <br> Address:     <?php echo $address; ?>  
    <br> E-mail:      <?php echo $email; ?>  
    <br> School:      <?php echo $school; ?>
    <br> Grade:       <?php echo $grade; ?>
    <br> Age:         <?php echo $age; ?>
    <br> Father Job:  <?php echo $fatherjob; ?>
    <br> Mother Job:  <?php echo $motherjob; ?> 
    <br> Siblings:    <?php echo $siblings; ?>  
   




    </div>

    <button> <a href="deleteStudent.php?code=<?php echo $id; ?>" style="text-decoration:none">  Delete  </a> </button>
    <button> <a href="updateStudent.php?code=<?php echo $id; ?>" style="text-decoration:none">  Update  </a> </button>



    
 

    



    <br> <hr>
 <?php
  }
?>







