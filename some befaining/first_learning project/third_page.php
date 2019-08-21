<?php


//echo "welcom to third page";




if (isset($_POST['okay'])) {

//echo "hello";
$name = $_POST['name'];
echo $name;


}

echo "music web for every one just add urls";
echo "<br> <br>";
echo "bublic movies add urls";



 ?>

<form action="third_page.php" method="POST">
  <br><br>
<input type="text" name="name" placeholder="enter your name">
<input type="submit" name="okay" value="ok">

</form>
