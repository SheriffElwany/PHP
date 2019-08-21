<?php
session_start();
if (!isset($_SESSION['ADNmN'])){
	
	header("location:Admin-login.php");
	
}
?>

<?php

$server='localhost';
$user='root';
$db='car_rent';
$conn=mysqli_connect($server,$user,'',$db);
If(!$conn){
	die("error");
}


if (isset($_POST['edit'])){
	$car_id=$_POST['car_id'];
	$sql="SELECT * FROM car WHERE car_id='$car_id'";
	$result=mysqli_query($conn,$sql);


	if(mysqli_num_rows($result)>0){
	
		while($row=mysqli_fetch_assoc($result)){
		echo "<!DOCTYPE html>
			<html lang='en'>
				<head>
					<title>Edit car information</title>
					<meta charset='utf-8'>
					<meta name='viewport' content='width=device-width, initial-scale=1'>
					<link rel='stylesheet' href='css/bootstrap.css'>
					<script src='js/jquery.min.js'></script>
					<script src='js/bootstrap.min.js'></script>
					<style> body{font-size:16px;}
						.hd{text-align:center;background-color:#d82a2b;padding:10px;color:#fff;margin:0px 0px 10px;}
						.btn{background-color:#d82a2b;color:#fff;width:100px;height:50px;}
						.btn:hover {background-color:orange;color:#fff;}
					</style>
				</head>
				<body>

					<div class='container-fluid'>
						<h2 class='hd'style='text-align:center;'>Edit Car information  </h2>
						<center><form  action='edit_code.php' method='POST' role='form' style='width:70%;align:center'>
						<div class='form-group'>
							<label for='type'>car type</label>
							<input type='text' class='form-control' id='type' name='type' value='".$row['type']."' placeholder='car type'>
						</div>
						<div class='form-group'>
							<label for='model'>car model</label>
							<input type='text' class='form-control' id='model' name='model' value='".$row['model']."' placeholder='car model'>
						</div>
						<div class='form-group'>
							<label for='kind'>car kind</label>
							<input type='text' class='form-control' id='kind' name='kind'value='".$row['kind']."' placeholder='car kind'>
						</div>
						<div class='form-group'>
							<label for='colour'>car colour</label>
							<input type='text' class='form-control' id='colour' name='colour'value='".$row['colour']."' placeholder='car colour'>
						</div>
						<div class='form-group'>
							<label for='price'>price per hour</label>
							<input type='text' class='form-control' id='price' name='price_per_hour'value='".$row['price_per_hour']."' placeholder='car price'>
						</div>
						<div class='form-group'>
							<label for='notes'>notes</label>
							<input type='text' class='form-control' id='notes'name='notes' value='".$row['notes']."' placeholder='car notes'>
						</div>
    
	
						<input type='submit' class='btn' name='edit' value='edit & save'>
					</form></center>
				</div>

			</body>
		</html>";	
		}
	}
}
Else IF (isset($_POST['delete'])){
	$car_id=$_POST['car_id'];
	$sql = "DELETE FROM car
        WHERE car_id='$car_id'";
	$result = mysqli_query($conn,$sql);
	if(!$result){
			
		die('Could not delete data: ' . mysqli_error());

	}
	header("location:view_car.php");
}
Else{
	header("location:Admin-login.html");
}
?>