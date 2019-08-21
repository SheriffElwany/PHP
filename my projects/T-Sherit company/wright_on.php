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


     </style>
 </head>
 <body>



    <div class="nav1">
        <div class="box1"> <a href="intro.php" style="text-decoration:none">Shop</a> </div>
        <div class="box2"> <a href="form1.php" style="text-decoration:none">Buy</a></div>
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
	 $design = $_POST['design'];
	 $style = $_POST['style'];
	 $color = $_POST['color'];
	 $delever = $_POST['delever'];

	//------valid
	if (!empty($design) && !empty($style) && !empty($color) && !empty($delever) ) {
		# code...

		//------------database-----
		$query = "INSERT INTO `user` (`id`, `name`, `phone`, `email`, `size`, `color`, `design`, `style`, `delever`)
				   VALUES (NULL, NULL, NULL, NULL, NULL, '$color', '$design', '$style', '$delever');";
		$run_query = mysqli_query($connection,$query);

		if ($run_query) {
			# code...
			
			header('Location: thank_user.php');
		}

		//--------------------------
	}else{
		header('Location: wright_on.php');
	}


}


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form action="wright_on.php" method="POST">
 		
    <center>
 		<br><br><br><br> 
 		<input type="text" name="design" placeholder="what you want to wright"><br><br><br><br>
 		<input type="text" name="style" placeholder="1/2 or 1/3 or full "><br><br><br><br>
 		<input type="text" name="color" placeholder="type your favorit color"><br><br><br><br>
 		<input type="text" name="delever" placeholder="choose metro or home adress"><br><br><br><br>
 		<input type="submit" name="submit" value="Okay"><br><br><br><br>
 	</center>
   </form>

 
 </body>
 </html>