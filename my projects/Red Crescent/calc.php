<?php
require "layout.html";
?>

<center>
<form action="" method="POST">
    <input type="text" name="num1" placeholder="Number 1"> <br><br>
    <input type="text" name="num2" placeholder="Number 2"> <br><br>

    <input class="btn btn-success" type="submit" name="add" value="+">
    <input class="btn btn-danger"  type="submit" name="less" value="-">
    

</form>
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
    echo $num1 - $num2;

}else {
    echo 'try ourr calculator';
}

?>