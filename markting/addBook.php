<?php 
 
 // Session Validation.
 //session_start();
 require "layout.php";

if (isset($_SESSION['admin_password_session']) && isset($_SESSION['admin_name_session'])) {
	# code...

}else{
 
 //header to go to sign in
 header('Location: index.html');
 die();

 

}

 
 ?>


<?php 

require 'conn.php';
global $conn;

if (isset($_POST['submit']) && isset($_POST['book_name'])   && isset($_POST['book_auth'])  && isset($_POST['lang']) ) {
	# code...
	$bookName = $_POST['book_name'];
    $bookAuth = $_POST['book_auth'];
    $lang = $_POST['lang'];
   

        //----------insert--------------

        $query = " INSERT INTO `books` (`bookName`, `bookAuth`, `lang`) VALUES ( '$bookName', '$bookAuth', '$lang') ; ";
        $run_query = mysqli_query($conn,$query);
        //$row = mysqli_num_rows($run_query);
        
        if ($run_query) {
        	# code...
            
            header('Location: home.php');
            
        }else{

        	echo "not inserted";
        }
}     




 ?>

 <html>
 <head>
     <title></title>
     <link rel="stylesheet" type="text/css" href="intro.css">
 </head>
 <body>



    


    <!--  <a href='home.php' > <button class="btn btn-primary" > home </button> </a> -->
                                           <center> <h1 class="info"> ADD Book </h1> </center>

    <form action="addBook.php" method="POST">

    <center>
    <input type="text" name="book_name" placeholder="Name"> <br><br><br>
    <input type="text" name="book_auth" placeholder="auther" > <br><br><br>
     <input type="text" name="lang" placeholder="language"> <br><br><br> 

    <input class=" btn btn-secondary" type="submit" value="ADD" name="submit">
    </center>
    

    </form>

 
 </body>
 </html>





