

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




     <h1> Events </h1>
 
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
    // code...
    //echo '&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; '.'<strong> The ID:  </strong>'.$element['ID'].'<br>'.'&nbsp; &nbsp;';
    echo '&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; '.'<strong>Event Name:  </strong>'.$element['event_name'].'<br>'.'&nbsp; &nbsp;';
    echo '&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; '.'<strong>Event Location:  </strong>'.$element['event_location'].'<br>'. '&nbsp; &nbsp;';
    echo '&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; '.'<strong>Event Description:  </strong>'.$element['event_description'].'<br>'.'&nbsp; &nbsp;';

    //echo '<button onclick="">Delete</button>';
    echo "<br> <hr>";
 
  }


 ?>




