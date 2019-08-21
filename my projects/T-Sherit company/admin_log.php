<?php 

require 'db_connection.php';
global $connection;

if (isset($_POST['submit'])) {
	# code...
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	if (!empty($name) && !empty($pass)) {
		# code...

		//----------sellect--------------

        $query = "SELECT * FROM admin WHERE name = '$name' AND pass = '$pass' ;";
        $run_query = mysqli_query($connection,$query);
        $row = mysqli_num_rows($run_query);
        
        if ($row > 0) {
        	# code...
        	echo "you are admin";
            header('Location: sales.php');

        }else{
        	echo "you are not admin";
        }
        //-----------------------------
        

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




     <form action="admin_log.php" method="POST">
    <center><br><br>

        <h1> ADMIN LOG </h1> <br><br><br>
       <input type="text" name="name" placeholder="Admin name"><br><br><br>
       <input type="password" name="pass" placeholder="password"><br><br><br>
       <input type="submit" name="submit" value="Log in">
    </center>
 </form>
 
 </body>
 </html>


