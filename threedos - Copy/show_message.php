<?php 

session_start();
require 'conn.php';
global $conn;


//------------------check session--------------
if (isset($_SESSION['admin_password_session']) && isset($_SESSION['admin_name_session'])) {
    # code...
    echo "i got here with session";   
    //-------------core code---------------

$query = "SELECT * FROM message;";

$run_query = mysqli_query($conn,$query);

if ($run_query) {
    # code...
    
    foreach ($run_query as $message) {
        # code...
        
        echo '<br>'.'Date: ' .$message['date'];
        echo '<br>'.'name: ' .$message['name'];
        echo '<br>'.'email: ' .$message['email'];
        echo '<br>'.'phone: ' .$message['subject'];
        echo '<br><br>'.'message: '. $message['message'].'<br><br>';
        echo '<hr>';
    }
}


//------------------feedback---------

$feed_query = "SELECT * FROM `feedBack` ";
$run_feed_query = mysqli_query($conn,$feed_query);
//var_dump($feed_query);



foreach($run_feed_query as $feed)
{
    echo "Date: ".$feed['date']."<br>";
    echo "feedback: ".$feed['feedBack'];
    
    echo "<hr>";
}

  //-------------end of the core code-----------------

  
}else{
    //header to go to sign in
    header('Location: admin_log.php');
    //die();
  }
  
  //-----------------end check-----------------
  

?>
