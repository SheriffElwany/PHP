<?php

session_start();


require 'db_connection.php';
global $connection;


if (isset($_POST['log'])) {
  // code...
  $admin_name = $_POST['admin_name'];
  $admin_password = $_POST['admin_password'];

//database.
  $admin_query = "SELECT admin_name, admin_password FROM admin ";
  $run_query = mysqli_query($connection, $admin_query);

//--------
//check if the query work
  if ($run_query) {
    // code...
    echo "query done";


    //check if there is tables and then  take the table ass a row
    $query_row = mysqli_fetch_assoc($run_query);


      if ($query_row == NULL) {
        // code...
        echo "there is no row founded";

      }else {


//=========================================================================================
        //core code
        //echo " <br>".$query_row['admin_name']."<br>";
        //echo $query_row['admin_password'];

        //check that admin insert onfo && check admin_name and admin_password.

        if (!empty($admin_name) && !empty($admin_password)) {


          //check admin name and password
          if ($admin_name == $query_row['admin_name'] && $admin_password == $query_row['admin_password']) {
            // code...
            //tis is admin.
            echo " <br> <br> wellcome admin";
            //admin session.
            $_SESSION['admin_name_session'] = $admin_name;
            $_SESSION['admin_password_session'] = $admin_password;
            //header 
            header('Location: show_message.php');



            // else not admin
          }else {
            echo "<br> <br> your are not the admin";
          }





        }


















      }




  }else {
    echo "query didn't run ";
  }
  //===========




  $query_row = mysqli_fetch_assoc($run_query);







}



 ?>
<form  action="admin_log.php" method="post">
 <br><br><br><br> <br><br><br><br>

 <center>  
  admin name: <input type="text" name="admin_name" placeholder="admin name"><br><br>
  admin password: <input type="password" name="admin_password" placeholder="admin password"><br><br>
  <input type="submit" name="log" value="log in ">
 
  </center>
</form>
