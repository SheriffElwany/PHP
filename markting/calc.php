<?php
require "layout.php";
?>




<center>
<div class="col-md-4  login-form-2">
<br><br><br>
<form action="calc.php" method="POST">

    <div class="form-group col-md-6 ">
    <input class="form-control" type="text" name="num1" placeholder="Number 1"> <br> 
    </div>

    <div class="form-group col-md-6 ">
        <input class="form-control" type="text" name="num2" placeholder="Number 2"> <br><br>
    </div>

    
    <input class="btn btn-success" type="submit" name="add" value="+">
    <input class="btn btn-danger"  type="submit" name="less" value="-">

</form>

</div>
</center>

<?php 

if (isset($_POST['add'])) {
    # add...
    $num1 = $_POST['num1']; 
    $num2 = $_POST['num2'];
    echo $num1 + $num2;


}elseif(isset($_POST['less'])){
    #less...
    $num1 = $_POST['num1']; 
    $num2 = $_POST['num2'];
    echo "<center>";
    echo $num1 - $num2;
    echo "</center>";

}else {
    echo 'try ourr calculator';
}

?>

