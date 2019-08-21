

<?php 

echo '<button> <a href="wellcomeAdmin.php" style="text-decoration:none"> Home </a> </button>';

 require 'Page.php';
require 'DBConn.php';
global $conn;





if( !empty($_POST['thisID']))
{
    $thisID = $_POST['thisID'];
    //echo $thisID ;

    $query = " SELECT * FROM `student` WHERE `student`.`ID` = '$thisID';";
        $runQuery = mysqli_query($conn,$query);
        //$row = mysqli_num_rows($run_query);
        
        if ($runQuery) {
        	# code...
            //echo '<br>runned <Br><br>';
            
            foreach ($runQuery as $element) {
             
               
                $id=         $element['ID'];
                $name =      $element['name'];
                $phone =     $element['phone'];
                $address =   $element['address'];
                $email =     $element['email'];
                $school =    $element['school'];
                $grade =     $element['grade'];
                $age  =      $element['age'];
                $fatherjob = $element['fatherjob'];
                $motherjob = $element['motherjob'];
                $siblings =  $element['siblings'];
                $pic =  $element['pic'];


                echo '&nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp
                &nbsp;&nbsp&nbsp;&nbsp &nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp';
                echo "<img class='dataPic' src='uploded_images/$pic'>";

                ?>



            
    <div class="info">
    
    
        <br> ID:          <?php echo $id ; ?>   
        <br> Name:        <?php echo $name; ?>   
        <br> Phone:       <?php echo $phone; ?>  
        <br> Address:     <?php echo $address; ?>  
        <br> E-mail:      <?php echo $email; ?>  
        <br> School:      <?php echo $school; ?>
        <br> Grade:       <?php echo $grade; ?>
        <br> Age:         <?php echo $age; ?>
        <br> Father Job:  <?php echo $fatherjob; ?>
        <br> Mother Job:  <?php echo $motherjob; ?> 
        <br> Siblings:    <?php echo $siblings; ?>  
    
    
    
    
    </div>
     <button> <a href="deleteStudent.php?code=<?php echo $id; ?>" style="text-decoration:none">  Delete  </a> </button>
     <button> <a href="updateThis.php?code=<?php echo $id; ?>" style="text-decoration:none">  Update  </a> </button>
            
                <br> <hr>


    <?php
         }
          
            
        }else{

        	echo "not ";
        }
}else{
    header('Location: wellcomeAdmin.php');
}

?>

