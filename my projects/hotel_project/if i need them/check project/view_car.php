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
 include 'Admin_header.php';
?>
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
  .radio {width:30px;height:30px;}
  .img{width:150px;height:150px;}
  .btn{background-color:#d82a2b;color:#fff;width:100px;height:50px;}
  .btn:hover {background-color:orange;color:#fff;}
  .hd{text-align:center;background-color:#d82a2b;padding:10px;color:#fff;}
  </style>
</head>
<body>

<div class="container-fluid" style="font-size:18px;background-color:#f4f4f4;">
  <h2 class="hd"style="text-align:center;">Car Database</h2>
  <div class="table-responsive" class="background-color:red;">
    <form action ="delete.php" method ="post">
  <table class="table table-striped">
    <thead class="hd">
      <tr>
        <th>#</th>
        <th>image</th>
        <th>car type</th>
        <th>model</th>
        <th>kind</th>
        <th>colour</th>
		<th>price per hour</th>
		<th>notes</th>
		<th>Edit</th>
		<th>Delete</th>
      </tr>
    </thead>
	
<tbody>
      <?php $sql="SELECT * FROM car";
	$result=mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result)){

		echo"
		<tr>
			<td><input class='radio' type='radio' name='car_id' value=" . $row['car_id']. " ></td>
			<td><img src='". $row['image']."' class='img'></td>
			<td>". $row['type'] ."</td>
			<td>". $row['model'] ." </td>
			<td>".  $row['kind']."</td>
			<td>".  $row['colour'] ."</td>
			<td>" . $row['price_per_hour'] ."</td>
			<td>". $row['notes'] ."</td>
			<td><input type='submit' class='btn' name='edit' value='edit'></td>
			<td><input type='submit' class='btn' name='delete' value='delete'></td>
		</tr>";
	  	
	}
	}
	mysqli_close($conn);
	?>
</tbody>
  </table>
  </form>
  </div>
</div>

</body>
</html>

