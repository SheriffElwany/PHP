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
$deleteThisID = $_GET['code'];
echo "<h1> the delete booking page </h1>";
//database


	echo $deleteThisID;

	$delete_this_query = "DELETE FROM `tranings` WHERE `ID` = '$deleteThisID'  ";
    $run_delete_this_query = mysqli_query($conn,$delete_this_query);

  //---------s

    if ($run_delete_this_query) {
        // code...
        echo "deleted";
        //header('Location: adminShowEvents.php');
        //header('Location: ' . $_SERVER['HTTP_REFERER']);
        header('Location: ' . $_SERVER['HTTP_REFERER']);


     }else{
       echo 'faild';
     }












 ?>
