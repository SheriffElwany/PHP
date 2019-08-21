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
       
        $query = "SELECT * FROM users WHERE userName = '$userName' AND userPass = '$userPass' ;";
        $run_query = mysqli_query($conn,$query);
        $row = mysqli_num_rows($run_query);

        if ($row >0) {
            # code...
            echo 'welcome  '.$userName;
            $_SESSION["admin_name_session"] = $userName;
            $_SESSION["admin_password_session"] = $userPass;
    
            header('Location: home.php');

            //header for actual page with session
        }else {
            header('Location: index.html');
        }


        


    }else {
        echo 'not user';
        echo 'go login form';
    }
}else {
    echo 'go login form';
}


?>