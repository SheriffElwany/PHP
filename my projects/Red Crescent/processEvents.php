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
        <div class="box1"> <a href="Events.php" style="text-decoration:none">Events</a>                 </div>
        <div class="box2"> <a href="Tranings.php" style="text-decoration:none">Tranings</a>                </div>
        <div class="box3"> <a href="shcaduals.php" style="text-decoration:none">schaduals</a>             </div>

        <div class="box4"><a href="adminPage.php" style="text-decoration:none">Log In</a>                  </div>


     </div>


     <div class="nav2"> <center>  <b><p class="message">RED CERCENT</p> </b> </center></div>



     <button> <a href='wellcomeAdmin.php' style="text-decoration:none"> Home </a> </button>
     <h1> Events </h1>

     
     <button> <a href='addEvent.php' style="text-decoration:none"> ADD Event </a> </button>

     <br><br><br>



    
 
 </body>
 </html>

 <?php 

require 'DBConn.php';
global $conn;


$query = " SELECT * FROM `events` ORDER BY ID desc;";
$runQuery = mysqli_query($conn, $query);
if($runQuery)
{
    //echo ' runned';
}else{
    echo 'not runned';
}


foreach ($runQuery as $element) {
    $id=$element['ID'];
    // code...
    echo '&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; '.'<b>Event Name:  </b>'.$element['event_name'].'<br>'.'&nbsp; &nbsp;';
    echo '&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; '.'<b>Event Location:  </b>'.$element['event_location'].'<br>'. '&nbsp; &nbsp;';
    echo '&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; '.'<b>Event Description:  </b>'.$element['event_description'].'<br>'.'&nbsp; &nbsp;';
    echo '';
    ?>
   
    <button> <a href="deleteEvent.php?code=<?php echo $id; ?>" style="text-decoration:none">  Delete  </a> </button>
    <button> <a href="updateEvent.php?code=<?php echo $id; ?>" style="text-decoration:none">  Update  </a> </button>

    <br> <hr>
 <?php
  }
?>







