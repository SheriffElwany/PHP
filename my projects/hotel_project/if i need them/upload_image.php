<?php
require 'db_connection.php';
global $connection;

if (isset($_POST['add_image'])) {


  $image_type = $_FILES['image']['type'];
  $name = $_FILES['image']['name'];
  $tmp_name = $_FILES['image']['tmp_name'];
  $location = 'uploded_images/';

//uppload function.



if (move_uploaded_file($tmp_name, $location.$name)){
  echo "<br>";
  echo  "[image name is:] ".$location.$name;
  echo " <br>  uploded    ";
}else {
  echo "upload faild";
}

//insert the photo into the database.
$db_image = $location.$name;


$image_query = "INSERT INTO `room` (`id`, `room_type`, `description`, `view`, `capacity`, `price`, `image`, `room_numbers`)
VALUES (NULL, NULL, NULL, NULL, NULL, NULL, ' $location.$name', NULL);";

$run_query = mysqli_query($connection, $image_query);

if ($run_query) {
  echo " <br> image inserted into database";
}else {
  echo  "<br>faild to insert image to database";
}
echo mysqli_error($connection);





}


 ?>

 <form  action="upload_image.php" method="post" enctype="multipart/form-data" >
   <input type="file" name="image" ><br><br>
   <input type="submit" name="add_image" value="ADD Image">

   <img src=" <?php echo $location.$name; ?>" >


 </form>
