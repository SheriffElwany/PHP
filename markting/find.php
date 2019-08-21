<?php 

require'layout.php';
require 'conn.php';
global $conn;



?>

<form action="find.php" method="POST">

    <input type="text" name="corseName">
    <input type="submit" name="submit" value="Language Search"> 

</form>

<?php 

if( isset($_POST['submit']))
{
    $langName = $_POST['corseName'];

    $query = "SELECT * FROM courses WHERE `back` = '$langName'; ";
    
    $runQuery = mysqli_query($conn,$query);
    
    if ($runQuery) {
        # code...
        
    }else{
        echo 'not';
    }

    foreach($runQuery as $course)
    {
        echo $course['courseName']."<br>";
        echo $course['front']."<br>";
        echo $course['back']."<br>"."<hr>";
    }
}



?>

