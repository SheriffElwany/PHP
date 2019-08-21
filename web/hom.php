<?php
require 'conn.php';
global $conn;

$query = "SELECT * FROM users";

$runQuery = mysqli_query($conn , $query);

foreach($runQuery as $user)
{
    $id = $user['id'];
    echo "<br>".$user['id'].' '.$user['userName']."<br>";

    ?>


<a href="delete.php?id=<?php echo $id; ?>"> Delete</a>
<a href="#"> Update</a>
<hr>

<?php
}
echo "<br>";
echo "all selected";


?>