<?php 
 
 // Session Validation.
 session_start();

if (isset($_SESSION['admin_password_session']) && isset($_SESSION['admin_name_session'])) {
	# code...


}else{
 
 //header to go to sign in
 header('Location: index.php');
 die();

 

}

 
 ?>


<?php 

require 'DBConn.php';
global $conn;
echo "<button> <a href='wellcomeAdmin.php' style='text-decoration:none'> Home </a> </button>";
 require 'Page.php';

if (isset($_POST['submit']) && isset($_POST['student_name']) && isset($_POST['address'])  && isset($_POST['phone']) && isset( $_POST['email']) 

&& isset($_POST['school']) && isset($_POST['grade']) && isset($_POST['age']) && isset( $_POST['fatherjob']) &&
 isset( $_POST['motherjob']) && isset($_POST['siblings'])  ) {
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

        $query = " INSERT INTO `student` (`ID`, `name`, `phone`, `address`, `email`, `school`, `grade`,
         `age`, `fatherjob`, `motherjob`, `siblings`, `pic`) 
         VALUES (NULL, '$studentName', '$phone', '$address', '$email', '$school', '$grade', '$age', '$fatherjob',
          '$motherjob', '$siblings', '$name'); ";

        //end
        $run_query = mysqli_query($conn,$query);


        //$row = mysqli_num_rows($run_query);
        
        if ($run_query) {
        	# code...
            
            header('Location: processStudents.php');
            
        }else{

        	echo "not inserted";
        }
}     




 ?>

 <html>
 <head>
     <title></title>
     <link rel="stylesheet" type="text/css" href="intro.css">
 </head>
 <body>

 <br>

    <form action="addStudent.php" method="POST" enctype="multipart/form-data">

    <center>
    <input type="text" name="student_name" placeholder="Name"> <br><br>
    <input type="text" name="address" placeholder="Address" > <br><br>
    <input type="text" name="phone" placeholder="Phone"> <br><br>
    <input type="text" name="email" placeholder="E-mail"> <br><br>
    <input type="text" name="school" placeholder="School"> <br><br>
    <input type="text" name="grade" placeholder="Grade"> <br><br>
    <input type="text" name="age" placeholder="Age"> <br><br>
    <input type="text" name="fatherjob" placeholder="Fther Job"> <br><br>
    <input type="text" name="motherjob" placeholder="Phone"> <br><br>
    <input type="text" name="siblings" placeholder="Siblings Number"> <br><br>


    <input type="file" name="image" ><br><br>

    <input type="submit" value="ADD" name="submit">
    </center>
    

    </form>

 
 </body>
 </html>





