<?php


session_start();
//echo $_SESSION['admin_name_session'];
//echo $_SESSION['admin_password_session'];



if (isset($_SESSION['admin_password_session']) && isset($_SESSION['admin_name_session'])) {
	# code...

	//echo "i'm here with my session";
	echo "<center> <h1>This is Admin page </h1> </center>";
    echo "<a href='dashB.php' > GO TO Dashboard </a>  <br> <br> ";
    echo "<a href='adding_room.php' > GO TO ADD Room </a>  <br> <br>";

}else {
	echo " go and sign in";

    header('Location: admin_log.php');
}



 ?>
