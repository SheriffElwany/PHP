<?php 

require "conn.php";
global $conn;


if (isset($_POST['submit']) && isset($_POST['name'])&& isset($_POST['email'])
    && isset($_POST['message'])&& isset($_POST['subject']) ) {
        # code...
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
    
        if (!empty($name) && !empty($email) && !empty($subject)
    && !empty($message)) {
            # code...

            $query = "INSERT INTO `message` (`id`, `name`, `email`, `subject`, `message`)
             VALUES (NULL, '$name', '$email', '$subject', '$message');";

            $run_query = mysqli_query($conn,$query);
            //var_dump($query);
            //echo mysqli_errno($conn);

            if ($run_query) {
                # code...
                echo '<br>'.'inserted';
                echo " <center> <h1> THANK YOU </h1> </center>";
            }


           
        }else {

        }
        
}else {
    
}

?>