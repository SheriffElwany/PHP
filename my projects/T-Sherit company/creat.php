 <!DOCTYPE html>
 <html>
 <head>
    <title></title>
    <style>
        
                    .nav1 {
        width: 100%;
        height: 120px;
    }



            .nav2{

            width: 100%;
            height: 55px;
            background-color:   #66ffff; 
        }


        .box1{
            float: left;
            width: 70px;
            height: 40px;
            margin-left: 450px;
            font-size: 25px;
            margin-top: 50px;
        }


                
        .box2{
            float: left;
            width: 70px;
            height: 50px;
            margin-left: 50px;
            font-size: 25px;
            margin-top: 50px;
        }

                
        .box3{
            float: left;
            width: 70px;
            height: 50px;
            margin-left: 50px;
            font-size: 25px;
            margin-top: 50px;
        }

                .box4{
            float: left;
            width: 70px;
            height: 50px;
            margin-left: 50px;
            font-size: 25px;
            margin-top: 50px;
        }

    </style>
 </head>
 <body>

        <div class="nav1">
        <div class="box1"> <a href="intro.php" style="text-decoration:none">Shop</a> </div>
        <div class="box2"> <a href="form1.php" style="text-decoration:none">Buy</a></div>
        <div class="box3"> About </div>
        <div class="box4"><a href="admin_log.php" style="text-decoration:none">Log In</a> </div>
     </div>


     <div class="nav2"> <center> <b><p class="message">CEEAT YOUR OWN T-SHIRT</p></b></center></div>


 </body>
 </html>



<?php 
require 'db_connection.php';
global $connection;
//---------get vars---
if (isset($_POST['submit'])) {
    # code...
     $user = $_POST['name'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     $size = $_POST['size'];
     $style = $_POST['style'];
     $color = $_POST['color'];
     $delever = $_POST['delever'];
       //image code here
     $image_type = $_FILES['image']['type'];
     $name = $_FILES['image']['name'];
     $tmp_name = $_FILES['image']['tmp_name'];
     $location = 'uploded_images/';
     //--------

    //------valid
    if (!empty($tmp_name) && !empty($style) && !empty($color) && !empty($delever) && !empty($name) && !empty($phone) && !empty($email) && !empty($size) ) {
        # code...
           //upload image code.

        if (move_uploaded_file($tmp_name, $location.$name)){
           echo "<br>";
           echo  "[image name is:] ".$location.$name;
           echo "<?php echo 'string'; ?> ";
           echo " <br>  uploded    ";
           }else {
            echo "upload faild";
        }


        //------------database-----
        $query = "INSERT INTO `user` (`id`, `name`, `phone`, `email`, `size`, `color`, `design`, `style`, `delever`)
                   VALUES (NULL, '$user', '$phone', '$email', '$size', '$color', '$name', '$style', '$delever');";
        $run_query = mysqli_query($connection,$query);

        if ($run_query) {
            # code...
            echo "insert";
            
            header('Location: thank_user.php');
        }

        //--------------------------
    }else{
        echo "inter data";
        header('Location: upload_design.php');
    }


}


 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <title></title>
    <style>
        
                .pic1{
            width: 30%;
            height: 500px;
            float: left;
            margin: 20px;
        }

                .pic2{
            width: 30%;
            height: 500px;
            float: left;
            margin: 20px
        }

                .pic3{
            width: 30%;
            height: 500px;
            float: left;
            margin: 20px
        }

    </style>
 </head>
 <body>
    <form action="upload_design.php" method="POST" enctype="multipart/form-data">
        
    <center> 
        <br>
        <input type="text" name="name" placeholder="name"> <br><br>
        <input type="text" name="phone" placeholder="phone"><br><br>
        <input type="text" name="email" placeholder="email"><br><br>
        <input type="text" name="size" placeholder="size"><br><br>      
        <input type="text" name="style" placeholder="1/2 or 1/3 or full "><br><br>
        <input type="text" name="color" placeholder="type your favorit color"><br><br>
        <input type="text" name="delever" placeholder="choose metro or home adress"><br><br>
        Enter the T-shirt photo<input type="file" name="image" ><br><br>
        <input type="submit" name="submit" value="Okay"><br><br>
        <h3> if you want more than 5 tshirts <a href="big_amount.php"> Click Me</a> 

    </center>
   </form>






    <div class="block1">
        <div class="pic1"> <img src="3.jpg"> </div>
        <div class="pic2"><img src="outlier-1_large.jpg"> </div>
        <div class="pic3"> <img src="5.jpg"> </div>
    </div>

    <div class="block2">
        <div class="pic1"> <img src="2.jpg"> </div>
        <div class="pic2"><img src="prime-time-1_7719645b-fd6a-44d1-a2ec-8d4d0a493efe_large.jpg"> </div>
        <div class="pic3"> <img src="4.jpg"> </div>
    </div>


 
 </body>
 </html>



