<?php 


require 'db_connection.php';
global $connection;

//---------get vars---
if (isset($_POST['submit'])) {
	# code...
	 $name = $_POST['name'];
	 $org_name = $_POST['org_name'];
	 $phone = $_POST['phone'];
	 $email = $_POST['email'];

	//------valid
	if (!empty($name) && !empty($org_name) && !empty($phone) && !empty($email)) {
		# code...

		//------------database-----
		$query = "INSERT INTO `big_amount` (`id`, `name`, `org_name`, `phone`, `email`) 
		                                                      VALUES (NULL, '$name', '$org_name', '$phone', '$email');";
		$run_query = mysqli_query($connection,$query);

		if ($run_query) {
			# code...
			header('Location: thank_company.php');
		}

		//--------------------------
	}else{
		header('Location: big_amount.php');
	}


}


 ?>