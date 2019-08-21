 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<style>
 		
 		            .nav1 {
        width: 100%;
        height: 120px;
    }



            .nav2{

            width: 100%;
            height: 55px;
            background-color:   #66ffff; 
            font-size: 40px;
        }


        .box1{
            float: left;
            width: 70px;
            height: 40px;
            margin-left: 450px;
            font-size: 25px;
            margin-top: 50px;
        }


                
        .box2{
            float: left;
            width: 70px;
            height: 50px;
            margin-left: 50px;
            font-size: 25px;
            margin-top: 50px;
        }

                
        .box3{
            float: left;
            width: 70px;
            height: 50px;
            margin-left: 50px;
            font-size: 25px;
            margin-top: 50px;
        }

                .box4{
            float: left;
            width: 70px;
            height: 50px;
            margin-left: 50px;
            font-size: 25px;
            margin-top: 50px;
        }

                .logo{
            background-color: red;
            width: 80px;
            height: 80px;
            margin: 30px;
            float: left;
        }


        .logopic{
            height: 80px;
            width: 80px;

        }


 	</style>
 </head>
 <body>

 	    <div class="nav1">
            <div class="logo"> <img class="logopic" src="logo.jpg"> </div>
        <div class="box1"> <a href="index.php" style="text-decoration:none">Shop</a> </div>
        <div class="box2"> <a href="upload_design.php" style="text-decoration:none">Buy</a></div>
        <div class="box3"> About </div>
        <div class="box4"><a href="admin_log.php" style="text-decoration:none">Log In</a> </div>
     </div>


     <div class="nav2"> <center> <b><p class="message">BOOST YOUR LOOK</p></b></center></div>


 </body>
 </html>



<?php 
require 'db_connection.php';
global $connection;
//---------get vars---
if (isset($_POST['submit'])) {
	# code...
	 $user = $_POST['name'];
	 $phone = $_POST['phone'];
	 $email = $_POST['email'];
	 $size = $_POST['size'];
	 $style = $_POST['style'];
	 $color = $_POST['color'];
	 $delever = $_POST['delever'];
	   //image code here
     $image_type = $_FILES['image']['type'];
     $name = $_FILES['image']['name'];
     $tmp_name = $_FILES['image']['tmp_name'];
     $location = 'uploded_images/';
     //--------

	//------valid
	if (!empty($tmp_name) && !empty($style) && !empty($color) && !empty($delever) && !empty($name) && !empty($phone) && !empty($email) && !empty($size) ) {
		# code...
		   //upload image code.

        if (move_uploaded_file($tmp_name, $location.$name)){
           echo "<br>";
           echo  "[image name is:] ".$location.$name;
           echo "<?php echo 'string'; ?> ";
           echo " <br>  uploded    ";
           }else {
            echo "upload faild";
        }


		//------------database-----
		$query = "INSERT INTO `user` (`id`, `name`, `phone`, `email`, `size`, `color`, `design`, `style`, `delever`)
				   VALUES (NULL, '$user', '$phone', '$email', '$size', '$color', '$name', '$style', '$delever');";
		$run_query = mysqli_query($connection,$query);

		if ($run_query) {
			# code...
			echo "insert";
			
			header('Location: thank_user.php');
		}

		//--------------------------
	}else{
		echo "inter data";
		header('Location: upload_design.php');
	}


}


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form action="upload_design.php" method="POST" enctype="multipart/form-data">
 		
    <center> 
 		<br>
 	    <input type="text" name="name" placeholder="name"> <br><br>
 	    <input type="text" name="phone" placeholder="phone"><br><br>
 	    <input type="text" name="email" placeholder="email"><br><br>
 	    <input type="text" name="size" placeholder="size"><br><br> 		
 		<input type="text" name="style" placeholder="1/2 or 1/3 or full "><br><br>
 		<input type="text" name="color" placeholder="type your favorit color"><br><br>
 		<input type="text" name="delever" placeholder="choose metro or home adress"><br><br>
 		Enter the T-shirt photo<input type="file" name="image" ><br><br>
 		<input type="submit" name="submit" value="Okay"><br><br>
 		<h3> if you want more than 5 tshirts <a href="big_amount.php"> Click Me</a> 

 	</center>
   </form>

 
 </body>
 </html>