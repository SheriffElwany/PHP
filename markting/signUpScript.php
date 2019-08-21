<?php
 // Session Validation.
 session_start();
require 'conn.php';
global $conn;

echo '<br>';

if (isset($_POST['submit'])) {
    # code...
    if (isset($_POST['user_name']) && isset($_POST['user_pass'])) {
        # code...
        $userName = $_POST['user_name'];
        $userPass = $_POST['user_pass'];
       //database for insert
        $query = "INSERT INTO  users (`userName`, `userPass`) values('$userName','$userPass' ) ;";
        $run_query = mysqli_query($conn,$query);
        
        if ($run_query) {
            # code...
            echo 'welcome  '.$userName;
            $_SESSION["admin_name_session"] = $userName;
            $_SESSION["admin_password_session"] = $userPass;
    
            header('Location: home.php');

            //header for actual page with session
        }else {
            //header('Location: index.html');
            echo 'not working';
        }

    }else {
        echo 'insert data plz';
        
    }
}else {
    echo 'no submit';
}


?>