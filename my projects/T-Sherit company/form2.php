<?php 
session_start();

if (isset($_POST['submit'])) {
	# code...
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$size = $_POST['size'];
	if (!empty($name)&& !empty($phone)&& !empty($email)&& !empty($size) ) {
		# code...
		$_SESSION['name'] = $name;
		$_SESSION['phone'] = $phone;
		$_SESSION['email'] = $email;
		$_SESSION['size'] = $size;

	}else{
		header('Location: form1.php');
	}

}

 ?>

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

 	<div>
 		<center>
 			<br><br><br><br> <br><br><br><br> <br><br><br><br>
 			<a href=""> Choose design </a> <br><br><br><br>
 			<a href="upload_design.php"> Have design </a><br><br><br><br>
 			<a href="wright_on.php"> Wright things on t-shirt </a><br><br><br><br>





 		</center>
 	</div>
 
 </body>
 </html>