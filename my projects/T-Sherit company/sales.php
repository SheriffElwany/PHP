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
            font-size: 40px;
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


echo "<center> <h1> Sales </h1> </center>";

//------------sellect users-----------------
$user_query = "SELECT * FROM `user` ";
$run_user_query = mysqli_query($connection,$user_query);
//------------------------------------
//------------sellect big amout--------------
$big_query = "SELECT * FROM `big_amount` ";
$run_big_query = mysqli_query($connection,$big_query);

//------------------------------------

//-----------user amount loop----
echo " <br><br><br><center> <h3> USER AMOUNTs</h3></center> <br><br>";

foreach ($run_user_query as $user_sale) {
	# code...
	echo "Name: ".$user_sale['name']."<br>";
	echo "E-mail: ".$user_sale['email']."<br>";
	echo "Phone: ".$user_sale['phone']."<br>";
	echo "Size: ".$user_sale['size']."<br>";
	echo "Color: ".$user_sale['color']."<br>";
    $img = $user_sale['design'];
	echo "<img src='uploded_images/$img'>";
	echo "<hr>";


	

}
//--------------------

//-----------big amount loop----
echo " <br><br><br><center> <h3> BIG AMOUNTs</h3></center> <br><br>";

foreach ($run_big_query as $big_sale) {
	# code...
	echo "Name: ".$big_sale['name']."<br>";
	echo "Org Name: ".$big_sale['org_name']."<br>";
	echo "E-mail: ".$big_sale['email']."<br>";
	echo "Phone: ".$big_sale['phone']."<br>";
	echo "<hr>";

}
//--------------------




 ?>

