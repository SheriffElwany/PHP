<?php 
 
 // Session Validation.
 session_start();

if (isset($_SESSION['admin_password_session']) && isset($_SESSION['admin_name_session'])) {


}else{
 
 //header to go to sign in
 header('Location: adminPage.php');
 die();

 

}

 
 ?>
 
 <html>
 <head>
     <title></title>
     <link rel="stylesheet" type="text/css" href="intro.css">
 </head>
 <body>



    <div class="nav1">
        <div class="logo"> <img class="logopic" src="pics/logo.png"> </div>
        <div class="box1"> <a href="Events.php" style="text-decoration:none">Events</a> </div>
        <div class="box2"> <a href="Tranings.php" style="text-decoration:none">Tranings</a></div>
        <div class="box3"> <a href="shcaduals.php" style="text-decoration:none">schaduals</a></div>

        <div class="box4"><a href="adminPage.php" style="text-decoration:none">Log In</a> </div>
     </div>


     <div class="nav2"> <center>  <b><p class="message">RED CERCENT</p> </b> </center></div>




     <center>
         <h1> wellcome admin </h1>



         <h3>  <button > <a href="processMembers.php" style="text-decoration:none">ALL Members</a> </button> <br><br></h3>  
         <h3>  <button > <a href="processSchaduals.php" style="text-decoration:none">ALL Schadual</a> </button> <br><br></h3>  
         <h3>  <button > <a href="processTranings.php" style="text-decoration:none">ALL Trannings</a> </button> <br><br> </h3> 
         <h3>  <button > <a href="processEvents.php" style="text-decoration:none">ALL Events</a> </button> <br>  <br>  </h3>
        
     </center>
 
 </body>
 </html>

 
<?php 

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

        }else{
        	echo "you are not admin";
        }
        //-----------------------------
        

	}
}



 ?>





