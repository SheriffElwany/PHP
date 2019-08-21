
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