<?php 

require "conn.php";
global $conn;


if (isset($_POST['submit']) && isset($_POST['feed'])) {
        # code...
        $feed = $_POST['feed'];

    
        if (!empty($feed) ) {
            # code...

            $query = "INSERT INTO `feedBack` (`feedBack`)
             VALUES ('$feed');";

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
