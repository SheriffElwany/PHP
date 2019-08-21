<?php 


 ?>


 <html>
<head>
	<title></title>
	<style>

        body{
        }
		
		.form{
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







	<center>


			<div class="form">
		

		<center>




	 <form action="get_org_info.php" method="POST">
	 	<br><br><br><br><br><br>

 	<input type="text" name="name" placeholder="name"> <br><br>
 	<input type="text" name="org_name" placeholder="Orgnization Name"> <br><br>
 	<input type="text" name="phone" placeholder="phone"><br><br>
 	<input type="text" name="email" placeholder="email"><br><br>
 	<input type="submit" name="submit" value="Okay">


 	</h3>
 	



     </form>

       </center>
    
   </div>
		



	</center>




</body>
</html>