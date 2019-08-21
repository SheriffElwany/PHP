<?php 
 
 // Session Validation.
 session_start();
 require "layout.php";

if (isset($_SESSION['admin_password_session']) && isset($_SESSION['admin_name_session'])) {
	# code...

}else{
 
 //header to go to sign in
 header('Location: index.html');
 die();

 

}

 
 ?>


<?php 

require 'conn.php';
global $conn;

if (isset($_POST['submit']) && isset($_POST['name'])   && isset($_POST['group'])  && isset($_POST['level']) ) {
	# code...
	$stuName = $_POST['name'];
    $group = $_POST['group'];
    $level = $_POST['level'];

    //image code here
   echo $image_type = $_FILES['image']['type']; echo "<br>";
   echo $name = $_FILES['image']['name']; echo "<br>";
   echo $tmp_name = $_FILES['image']['tmp_name'];echo "<br>";
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
        

    $level = $_POST['level'];
    $level = $_POST['level'];
        $query = " INSERT INTO `students` ( `name`, `group_name`, `level`,`pic`) VALUES ('$stuName', '$group', '$level', '$name');";
        $run_query = mysqli_query($conn,$query);
        //$row = mysqli_num_rows($run_query);
        
        if ($run_query) {
        	# code...
            
            header('Location: home.php');
            
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

    <!--  <a href='home.php' > <button class="btn btn-primary" > home </button> </a> -->
                                           <center> <h1 class="info"> ADD Student </h1> </center>

    <form action="addStudent.php" method="POST" enctype="multipart/form-data">
    <br><br><br>
    <center>
    <input type="text" name="name" placeholder="name"> <br><br>
    <input type="text" name="group" placeholder="Group" > <br><br>
    <input type="text" name="level" placeholder="level"> <br><br>
     <input type="file" name="image" ><br><br>

    <input class=" btn btn-secondary" type="submit" value="ADD" name="submit">
    </center>
    

    </form>

 
 </body>
 </html>





