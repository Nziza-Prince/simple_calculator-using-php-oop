<?php
declare(strict_types=1);
include("./calcLogic.php");
$oper=$_POST['operator'];
$num1=$_POST['num1'];
$num2=$_POST['num2'];

$calulate=new Calc($oper,(int)$num1,(int)$num2);

try{
    $calulate->calculate();

}
catch(TypeError $e){
    echo "Error when calculating".$e;
}

?>