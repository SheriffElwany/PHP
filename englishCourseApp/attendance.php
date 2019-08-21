<?php 

require 'layout.php';
?>

 

<form action="attendance.php" method="POST">


<center>
<br><br>
<br><br>


    <div class="col-md-3  login-form-2">

    <div class="form-group">
        <input type="text" class="form-control " name="user_id" placeholder="Student ID" >
    </div>

    <div class="form-group">
        <input type="text" class="form-control " name="lec_num" placeholder="Lecture Number" >
    </div>
   

   

    <input class="btn btn-primary " type="submit" name="submit" value="Attend" >

    <!-- c -->

</div>

    
</center>
</form>

<?php
 // Session Validation.
 session_start();
require 'conn.php';
global $conn;

echo '<br>';

if (isset($_POST['submit'])) {
    # code...
    if (isset($_POST['user_id']) && isset($_POST['lec_num']) ) {
        # code...
        $userId = $_POST['user_id'];
        $lecNum = $_POST['lec_num'];
       //database for insert
        $query = "INSERT INTO `attendance` (`stu_id`, `lec_num`) VALUES ('$userId', '$lecNum');";
        $run_query = mysqli_query($conn,$query);
        
        if ($run_query) {
            # code...
         
    
            header('Location: home.php');

            
        }else {
            //header('Location: index.html');
            echo 'not working';
        }

    }else {
        echo 'insert data plz';
        
    }
}else {
    //echo 'no submit';
}


?>


