<?php
require 'layout.php';
?>

<center>
<div class="col-md-4  login-form-2">
<br><br><br>
<form action="simpleLog.php" method="POST">

    <div class="form-group col-md-6 ">
        <input class="form-control" type="text" name="user_name" placeholder="User Name"> <br> 
    </div>

    <div class="form-group col-md-6 ">
        <input class="form-control" type="password" name="user_pass" placeholder="User Passwor"><br><br>
    </div>

    
    <input class="btn btn-primary" type="submit" name="submit"><br><br>

</form>

</div>
</center>


<?php

//user yasser pass 11

if (isset($_POST['submit'])) {
    # code...
    $name =  $_POST['user_name'];
    $pass = $_POST['user_pass'];

    if ($name == 'sheriff' && $pass == 11 ) {
        # code...
        echo 'welcome sheriff';
    }else {
        
        echo 'invalid password or user name';
    }

}else {
    echo 'enter your data';
}



?>