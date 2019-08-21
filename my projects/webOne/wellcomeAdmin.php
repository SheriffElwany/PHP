<?php 
 
 // Session Validation.
 session_start();
 echo '<br>';
 require 'Page.php';

if (isset($_SESSION['admin_password_session']) && isset($_SESSION['admin_name_session'])) {


}else{
 
 //header to go to sign in
 header('Location: index.php');
 die();

 

}

 
 ?>
 
 <html>
 <head>
     <title></title>
     <link rel="stylesheet" type="text/css" href="intro.css">
 </head>
 <body>


   <br><br><br><br>
     <center>
         


         <form method="POST" action="findThis.php">

         <input type="number" name="thisID" placeholder="Student ID">
         <input type="submit" value="Search">
         
         
         </form>




        
         <h3>  <button > <a href="processStudents.php" style="text-decoration:none"> Students </a></a> </button> <br>  <br>  </h3>
        
     </center>
 
 </body>
 </html>

 






