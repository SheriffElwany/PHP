




<?php 


session_start();

require 'Page.php';
require 'DBConn.php';
global $conn;

if (isset($_POST['submit'])) {
	# code...
	$userName = $_POST['name'];
	$paswword = $_POST['pass'];
	if (!empty($userName) && !empty($paswword)) {
		# code...

		//----------sellect--------------

        $query = "SELECT * from `adminlog` WHERE user_name='$userName' AND password='$paswword';";
        $run_query = mysqli_query($conn,$query);
        $row = mysqli_num_rows($run_query);
        
        if ($row > 0) {
        	# code...
        	echo "you are admin";
            header('Location: wellcomeAdmin.php');
            $_SESSION['admin_name_session'] = $userName;
            $_SESSION['admin_password_session'] = $paswword;

        }else{
        	echo "you are not admin";
        }
        //-----------------------------
        

	}
}



 ?>

 <html>
 <head>
     <title></title>
     <link rel="stylesheet" type="text/css" href="intro.css">
 
 </head>
 <body>






     <form action="index.php" method="POST">
    <center><br><br>

        <h1> ADMIN LOG </h1> <br><br><br>
       <input type="text" name="name" placeholder="Admin name"><br><br><br>
       <input type="password" name="pass" placeholder="password"><br><br><br>
       <input type="submit" name="submit" value="Log in">
    </center>
 </form>
 
 </body>
 </html>





