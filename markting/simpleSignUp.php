<?php 
require "layout.php";



$newUserName= '';
$newUserPass= '';

if (isset($_POST['submit'])) {
    # code...
    
    echo '<br>';
    echo $newUserName = $_POST['user_name'];
    echo $newUserPass = $_POST['user_pass'];
}



?>

<!DOCTYPE html>
<html lang="en">
<head>

  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>DEMO</title>

    <style>
        
            body{
                background-color: #C70039;
            }    
        </style>
</head>
<body>
    

    <br> <br>


    

  <center>
        <div class=" w-25 alert alert-info">
                <h1 > Sign Up </h1>
            </div>
  </center>
          
          
 

    <form action="simpleSignUp.php" method="POST">


        <center>


            <div class="col-md-4  login-form-2">

            <div class="form-group">
                <input type="text" class="form-control " name="user_name" placeholder="User Name" >
            </div>
            <br><br>
            <div class="form-group">
                <input type="password" class="form-control " name="user_pass" placeholder="User password" >
            </div>
            <br><br>

            <input class="btn btn-primary " type="submit" name="submit" value="Sing In" >

            <!-- c -->

        </div>

            
        </center>
    </form>


  

</body>
</html>




