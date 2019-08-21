<?php

echo "working";
if (isset($_POST['next'])) {

  header("location:http://localhost/third_page.php");
  // code...
}




?>
<form action="third_page.php" method="POST">

    <input type="submit" name="next" value="next">





</form>
