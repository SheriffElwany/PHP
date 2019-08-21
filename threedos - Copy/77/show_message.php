<?php 

session_start();
require 'db_connection.php';
global $connection;



//------------------check session--------------
if (isset($_SESSION['admin_password_session']) && isset($_SESSION['admin_name_session'])) {
    # code...
    echo "i got here with session";   
    //-------------core code---------------

$query = "SELECT * FROM message;";

$run_query = mysqli_query($connection,$query);

if ($run_query) {
    # code...
    
    foreach ($run_query as $message) {
        # code...
        echo '<br>'.'email: ' .$message['email'];
        echo '<br>'.'name: ' .$message['name'];
        echo '<br>'.'subject: ' .$message['subject'];
        echo '<br><br>'.'message: '. $message['message'].'<br><br>';
        echo '<hr>';
    }
}

  //-------------end of the core code-----------------

  
}else{
    //header to go to sign in
    header('Location: admin_log.php');
    //die();
  }
  
  //-----------------end check-----------------
  

?>