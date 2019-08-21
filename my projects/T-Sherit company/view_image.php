<?php 
require 'db_connection.php';
global $connection;


echo "<center> <h1> View Image </h1> </center>";

//-------------view image-------
if (isset($_POST['submit'])) {
	# code...
	if (!empty($_POST['image'])) {
		# code...
		$image = $_POST['image'];
		echo $image;
	}
	}
//----------------------------





 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

 	<img src="<?php echo $image; ?>">
 
 </body>
 </html>