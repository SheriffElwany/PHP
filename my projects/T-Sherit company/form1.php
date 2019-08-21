<?php 

require 'db_connection.php';
global $connection;



 ?>


<html>
<head>
	<title></title>
	<style>


		
		.form{
			background-color:  #FFFFFF  ;
			height: 600px;
			width: 750px;
			margin-top: 30px;
		}
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
    	<div class="box2"> Buy</div>
    	<div class="box3"> About </div>
    	<div class="box4"><a href="admin_log.php" style="text-decoration:none">Log In</a> </div>
    </div>

	<div class="nav2"> <center> <b><p class="message">BOOST YOUR LOOK</p></b></center></div>


	<center>


			<div class="form">
		

		<center>




	 <form action="form2.php" method="POST">
	 	<br><br><br><br><br><br>

 	<input type="text" name="name" placeholder="name"> <br><br>
 	<input type="text" name="phone" placeholder="phone"><br><br>
 	<input type="text" name="email" placeholder="email"><br><br>
 	<input type="text" name="size" placeholder="size"><br><br>
 	<input type="submit" name="submit" value="Okay">

 	<h3> if you want more than 5 tshirts <a href="big_amount.php"> Click Me</a> 

 	</h3>
 	



     </form>

       </center>
    
   </div>
		



	</center>




</body>
</html>
