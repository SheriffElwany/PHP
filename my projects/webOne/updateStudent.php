<?php 
 
 // Session Validation.
 session_start();
 require 'Page.php';

if (isset($_SESSION['admin_password_session']) && isset($_SESSION['admin_name_session'])) {
	# code.
}else{
 
 //header to go to sign in
 header('Location: adminPage.php');
 die();

 

}

 
 ?>


<?php

$id = $_GET['code'];

require 'DBConn.php';
global $conn;


$query = " SELECT * FROM `student` WHERE ID='$id';";
$runQuery = mysqli_query($conn, $query);
if($runQuery)
{
    //echo ' runned';
}else{
    echo 'not runned';
}

$query_row = mysqli_fetch_assoc($runQuery);

$id=         $query_row['ID'];
$studentName =      $query_row['name'];
$phone =     $query_row['phone'];
$address =   $query_row['address'];
$email =     $query_row['email'];
$school =    $query_row['school'];
$grade =     $query_row['grade'];
$age  =      $query_row['age'];
$fatherjob = $query_row['fatherjob'];
$motherjob = $query_row['motherjob'];
$siblings =  $query_row['siblings'];
//$pic =  $query_row['pic'];









 ?>

    <form action="updateStudent.php?code=<?php echo $id; ?> " method="POST" enctype="multipart/form-data">

    <center>
    <input type="text" name="student_name" placeholder="Name"          value="<?php echo $studentName ; ?>" > <br><br>
    <input type="text" name="address" placeholder="Address"          value="<?php echo $address ; ?>" > <br><br>
    <input type="text" name="phone" placeholder="Phone"              value="<?php echo $phone ; ?>" > <br><br>
    <input type="text" name="email" placeholder="E-mail"             value="<?php echo $email ; ?>" > <br><br>
    <input type="text" name="school" placeholder="School"            value="<?php echo $school ; ?>" > <br><br>
    <input type="text" name="grade" placeholder="Grade"              value="<?php echo $grade ; ?>" > <br><br>
    <input type="text" name="age" placeholder="Age"                  value="<?php echo $age ; ?>" > <br><br>
    <input type="text" name="fatherjob" placeholder="Fther Job"      value="<?php echo $fatherjob ; ?>" > <br><br>
    <input type="text" name="motherjob" placeholder="Phone"          value="<?php echo $motherjob ; ?>" > <br><br>
    <input type="text" name="siblings" placeholder="Siblings Number" value="<?php echo $siblings ; ?>" > <br><br>


    <input type="file" name="image" ><br><br>

    <input type="submit" value="ADD" name="submit">
    </center>
        

    </form>

<?php 

require 'DBConn.php';
global $conn;

if (isset($_POST['submit'])  ){
	# code...


    $studentName = $_POST['student_name'];
    $phone =       $_POST['phone'];
    $address =     $_POST['address'];
    $email =       $_POST['email'];
    $school =      $_POST['school'];
    $grade =       $_POST['grade'];
    $age  =        $_POST['age'];
    $fatherjob =   $_POST['fatherjob'];
    $motherjob =   $_POST['motherjob'];
    $siblings =    $_POST['siblings'];
    

     //image code here
 $image_type = $_FILES['image']['type'];
 $name = $_FILES['image']['name'];
 $tmp_name = $_FILES['image']['tmp_name'];
 $location = 'uploded_images/';

 //upload image code.

if (move_uploaded_file($tmp_name, $location.$name)){
   echo "<br>";
   echo  "[image name is:] ".$location.$name;
   echo "<?php echo 'string'; ?> ";
   echo " <br>  uploded    ";
   }else {
    echo "upload faild";
  }

  //-----------



        //----------insert--------------

        $query = " UPDATE `student` SET `name` = '$studentName', `phone` = '$address', `address` = '$phone',
        `email` = '$email', `school` = '$school', `grade` = '$grade', `age` = '$age', `fatherjob` = '$fatherjob',
        `motherjob` = '$motherjob' , `siblings` = '$siblings', `pic` = '$name'
         WHERE `student`.`ID` = '$id'; ";  
        


        $run_query = mysqli_query($conn,$query);
        //$row = mysqli_num_rows($run_query);
        
        if ($run_query) {
        	# code...
            echo 'runned';
            header('Location: processStudents.php');
            //header('Location: ' . $_SERVER['HTTP_REFERER']);
            
        }else{

        	echo "not inserted";
        }
}else{
    echo 'fill all please';
}


?>