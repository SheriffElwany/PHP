

<?php

// database => user yasser pass 11


    $name =  $_POST['user_name'];
    $pass = $_POST['user_pass'];

    if ($name == 'sheriff' && $pass == 11 ) {
        # code...
        echo 'welcome sheriff';
    }else {
        
        echo 'invalid password or user name';
    }





?>