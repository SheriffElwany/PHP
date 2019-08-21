<?php 
 
 // Session Validation.
 session_start();

if (isset($_SESSION['admin_password_session']) && isset($_SESSION['admin_name_session'])) {
	# code...


}else{
 
 //header to go to sign in
 header('Location: adminPage.php');
 die();

 

}

 
 ?>


<?php 

require 'DBConn.php';
global $conn;

if (isset($_POST['submit']) && isset($_POST['event_name']) && isset($_POST['event_location'])  && isset($_POST['description'])  ) {
	# code...
	$eventName = $_POST['event_name'];
    $eventLocation = $_POST['event_location'];
    $eventDescripteion = $_POST['description'];

        //----------insert--------------

        $query = " INSERT INTO `events` (`event_name`, `event_location`, `event_description`) VALUES ('$eventName', '$eventLocation', '$eventDescripteion'); ";
        $run_query = mysqli_query($conn,$query);
        //$row = mysqli_num_rows($run_query);
        
        if ($run_query) {
        	# code...
            
            header('Location: processEvents.php');
            
        }else{

        	echo "not inserted";
        }
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
        <div class="box1"> <a href="Events.php" style="text-decoration:none">Events</a>                 </div>
        <div class="box2"> <a href="Tranings.php" style="text-decoration:none">Tranings</a>                </div>
        <div class="box3"> <a href="shcaduals.php" style="text-decoration:none">schaduals</a>             </div>

        <div class="box4"><a href="adminPage.php" style="text-decoration:none">Log In</a>                  </div>


     </div>


     <div class="nav2"> <center>  <b><p class="message">RED CERCENT</p> </b> </center></div>


     <button> <a href='wellcomeAdmin.php' style="text-decoration:none"> Home </a> </button>

                                           <center> <h1> ADD event </h1> </center>

    <form action="addevent.php" method="POST">

    <center>
    <input type="text" name="event_name" placeholder="Event Name"> <br><br><br>
    <input type="text" name="event_location" placeholder="location" > <br><br><br>
    <input type="text" name="description" placeholder="description"> <br><br><br>

    <input type="submit" value="ADD" name="submit">
    </center>
    

    </form>

 
 </body>
 </html>





