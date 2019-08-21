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


$query = " SELECT * FROM `tranings` WHERE ID='$id';";
$runQuery = mysqli_query($conn, $query);
if($runQuery)
{
    //echo ' runned';
}else{
    echo 'not runned';
}

$query_row = mysqli_fetch_assoc($runQuery);

$traningNameUpdate= $query_row['traning_name'];
$traningDescripteionUpdate= $query_row['traning_location'];
$traningLocationUpdate= $query_row['traning_description'];






 ?>

    <form action="updateTraning.php?code=<?php echo $id; ?> " method="POST">

        <center>
        
        <br><br><br><br><br><br><br><br>
        <input type="text" name="traning_name" placeholder="Traning Name" value= <?php echo $traningNameUpdate;?> > <br><br><br>
        <input type="text" name="traning_location" placeholder="location" value= <?php echo $traningDescripteionUpdate;?> > <br><br><br>
        <input type="text" name="description" placeholder="description" value= <?php echo $traningLocationUpdate;?> > <br><br><br>
        
        <input type="submit" value="ADD" name="submit">
        </center>
        

    </form>

<?php 

require 'DBConn.php';
global $conn;

if (isset($_POST['submit']) && isset($_POST['traning_name']) && isset($_POST['traning_location'])  && isset($_POST['description'])  ) {
	# code...
	$traningtName = $_POST['traning_name'];
    $traningLocation = $_POST['traning_location'];
    $traningtDescripteion = $_POST['description'];
    $id = $_GET['code'];

        //----------insert--------------

        $query = " UPDATE `tranings` SET `traning_name` = '$traningtName', `traning_location` = '$traningLocation', `traning_description` = '$traningtDescripteion'
         WHERE `tranings`.`ID` = '$id'; ";
        $run_query = mysqli_query($conn,$query);
        //$row = mysqli_num_rows($run_query);
        
        if ($run_query) {
        	# code...
            echo 'runned';
            header('Location: processTranings.php');
            ///header('Location: ' . $_SERVER['HTTP_REFERER']);
            
        }else{

        	echo "not inserted";
        }
}  


?>