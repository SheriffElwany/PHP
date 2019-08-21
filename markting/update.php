<?php 
 
 // Session Validation.
 //session_start();
 require 'layout.php';
if (isset($_SESSION['admin_password_session']) && isset($_SESSION['admin_name_session'])) {
	# code.
}else{
 
 //header to go to sign in
 header('Location: index.html');
 die();

 

}

 
 ?>


<?php

$id = $_GET['code'];

require 'conn.php';

global $conn;


$query = " SELECT * FROM `books` WHERE id='$id';";
$runQuery = mysqli_query($conn, $query);
if($runQuery)
{
    //echo ' runned';
}else{
    echo 'not runned';
}

$query_row = mysqli_fetch_assoc($runQuery);

$bookName= $query_row['bookName'];
$bookAuth= $query_row['bookAuth'];
$lang= $query_row['lang'];






 ?>

    <form action="update.php?code=<?php echo $id; ?> " method="POST">

    <div class="col-md-12  login-form-2">
        <center>
        
        <br><br><br><br>
        

        <div class="form-group">
            <input type="text" name="book_name" placeholder="Event Name" value= <?php echo $bookName;?> > <br>   
        </div>

        <div class="form-group">
            <input type="text" name="book_auth" placeholder="location" value= <?php echo $bookAuth;?> > <br>
        </div>
        <div class="form-group">
            <input type="text" name="lang" placeholder="description" value= <?php echo $lang;?> > <br>
        </div>
        
        
        <input class="btn btn-secondary" type="submit" value="ADD" name="submit">
        </center>
        
       
        </div>

    </form>

<?php 

require 'conn.php';
global $conn;

if (isset($_POST['submit']) && isset($_POST['book_name']) && isset($_POST['book_auth'])  && isset($_POST['lang'])  ) {
	# code...
	$bookName = $_POST['book_name'];
    $bookAuth = $_POST['book_auth'];
    $lang = $_POST['lang'];
    $id = $_GET['code'];

        //----------insert--------------

        $query = " UPDATE `books` SET `bookName` = '$bookName', `bookAuth` = '$bookAuth', `lang` = '$lang'
         WHERE `books`.`id` = '$id'; ";
        $run_query = mysqli_query($conn,$query);
        //$row = mysqli_num_rows($run_query);
        
        if ($run_query) {
        	# code...
            echo 'runned';
            header('Location: home.php');
            ///header('Location: ' . $_SERVER['HTTP_REFERER']);
            
        }else{

        	echo "not inserted";
        }
}  


?>