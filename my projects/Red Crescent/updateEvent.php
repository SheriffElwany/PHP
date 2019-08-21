<?php 
 
 // Session Validation.
 session_start();

if (isset($_SESSION['admin_password_session']) && isset($_SESSION['admin_name_session'])) {
	# code.
}else{
 
 //header to go to sign in
 header('Location: adminPage.php');
 die();

 

}

 
 ?>


<?php

$id = $_GET['code'];

require 'DBConn.php';
global $conn;


$query = " SELECT * FROM `events` WHERE ID='$id';";
$runQuery = mysqli_query($conn, $query);
if($runQuery)
{
    //echo ' runned';
}else{
    echo 'not runned';
}

$query_row = mysqli_fetch_assoc($runQuery);

$eventNameUpdate= $query_row['event_name'];
$eventDescripteionUpdate= $query_row['event_location'];
$eventLocationUpdate= $query_row['event_description'];






 ?>

    <form action="updateEvent.php?code=<?php echo $id; ?> " method="POST">

        <center>
        
        <br><br><br><br><br><br><br><br>
        <input type="text" name="event_name" placeholder="Event Name" value= <?php echo $eventNameUpdate;?> > <br><br><br>
        <input type="text" name="event_location" placeholder="location" value= <?php echo $eventDescripteionUpdate;?> > <br><br><br>
        <input type="text" name="description" placeholder="description" value= <?php echo $eventLocationUpdate;?> > <br><br><br>
        
        <input type="submit" value="ADD" name="submit">
        </center>
        

    </form>

<?php 

require 'DBConn.php';
global $conn;

if (isset($_POST['submit']) && isset($_POST['event_name']) && isset($_POST['event_location'])  && isset($_POST['description'])  ) {
	# code...
	$eventName = $_POST['event_name'];
    $eventLocation = $_POST['event_location'];
    $eventDescripteion = $_POST['description'];
    $id = $_GET['code'];

        //----------insert--------------

        $query = " UPDATE `events` SET `event_name` = '$eventName', `event_location` = '$eventLocation', `event_description` = '$eventDescripteion'
         WHERE `events`.`ID` = '$id'; ";
        $run_query = mysqli_query($conn,$query);
        //$row = mysqli_num_rows($run_query);
        
        if ($run_query) {
        	# code...
            echo 'runned';
            header('Location: processEvents.php');
            ///header('Location: ' . $_SERVER['HTTP_REFERER']);
            
        }else{

        	echo "not inserted";
        }
}  


?>