<?php 
 
 // Session Validation.
 session_start();
 require 'layout.php';
if (isset($_SESSION['admin_password_session']) && isset($_SESSION['admin_name_session'])) {
	# code.
}else{
 
 //header to go to sign in
 header('Location: index.html');
 die();

 

}

 
 ?>


<?php

$id = $_GET['code'];

require 'conn.php';

global $conn;


$query = " SELECT * FROM `students` WHERE stu_id='$id';";
$runQuery = mysqli_query($conn, $query);
if($runQuery)
{
    //echo ' runned';
}else{
    echo 'not runned';
}

$query_row = mysqli_fetch_assoc($runQuery);

$studentName= $query_row['name'];
$groupName= $query_row['group_name'];
$level= $query_row['level'];






 ?>

    <form action="update.php?code=<?php echo $id; ?> " method="POST">

    <div class="col-md-12  login-form-2">
        <center>
        
        <br><br><br><br>
        

        <div class="form-group">
            <input type="text" name="student_name" placeholder="Event Name" value= <?php echo $studentName;?> > <br>   
        </div>

        <div class="form-group">
            <input type="text" name="group_name" placeholder="location" value= <?php echo $groupName;?> > <br>
        </div>
        <div class="form-group">
            <input type="text" name="level" placeholder="description" value= <?php echo $level;?> > <br>
        </div>
        
        
        <input class="btn btn-secondary" type="submit" value="Update" name="submit">
        </center>
        
       
        </div>

    </form>

<?php 

require 'conn.php';
global $conn;

if (isset($_POST['submit']) && isset($_POST['student_name']) && isset($_POST['group_name'])  && isset($_POST['level'])  ) {
	# code...
	$studentName = $_POST['student_name'];
    $group = $_POST['group_name'];
    $level = $_POST['level'];
    $id = $_GET['code'];

        //----------insert--------------

        $query = " UPDATE `students` SET `name` = '$studentName', `group_name` = '$group', `level` = '$level'
         WHERE `stu_id` = '$id'; ";
        $run_query = mysqli_query($conn,$query);
        //$row = mysqli_num_rows($run_query);
        
        if ($run_query) {
        	# code...
            echo 'runned';
            header('Location: home.php');
            ///header('Location: ' . $_SERVER['HTTP_REFERER']);
            
        }else{

        	echo "not inserted";
        }
}  


?>