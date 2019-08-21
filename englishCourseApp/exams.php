<?php 

require 'layout.php';
?>

 

<form action="exams.php" method="POST">


<center>
<br><br>
<br><br>


    <div class="col-md-3  login-form-2">

    <div class="form-group">
        <input type="text" class="form-control " name="stu_id" placeholder="Student ID" >
    </div>

    <div class="form-group">
        <input type="text" class="form-control " name="exam_num" placeholder="Lecture Number" >
    </div>

    <div class="form-group">
        <input type="text" class="form-control " name="grade" placeholder="grade" >
    </div>


    <div class="form-group">
        <input type="text" class="form-control " name="notes" placeholder="notes" >
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
    if (!empty($_POST['stu_id']) && !empty($_POST['exam_num']) && !empty($_POST['grade'])) {
        # code...
        $stuId = $_POST['stu_id'];
        $examNum = $_POST['exam_num'];
        $grade = $_POST['grade'];
        $notes = $_POST['notes'];
       //database for insert
        $query = "INSERT INTO `exams` (`stu_id`, `exam_num`, `grade`, `notes` ) 
        VALUES ('$stuId', '$examNum','$grade', '$notes');";
        $run_query = mysqli_query($conn,$query);
        
        if ($run_query) {
            # code...
         
    
            //header('Location: home.php');
            echo ' working';

            
        }else {
            //header('Location: index.html');
            echo 'not working';
        }

    }else {
        echo 'Fill all data please';
        
    }
}else {
    //echo 'no submit';
}


?>


