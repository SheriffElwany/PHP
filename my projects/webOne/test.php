<?php


//------------------check session--------------

   # code...
   echo "i got here with session";
   //-------------core code---------------
   echo "<center> <h1> Adding a Room </h1> </center> ";

 if (isset($_POST['add_room'])) {
   // code...
   //take the form into variables.
 

   //image code here
   $image_type = $_FILES['image']['type'];
   $name = $_FILES['image']['name'];
   $tmp_name = $_FILES['image']['tmp_name'];
   $location = 'uploded_images/';
   //--------


   
   //--------------------


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
   








 }




  //-------------end of the core code-----------------


//-----------------end check-----------------




 ?>

 <form  action="test.php" method="post" enctype="multipart/form-data">

<center>

   <input type="file" name="image" ><br><br>

   <input type="submit" name="add_room" value="ADD">

</center>



 </form>
