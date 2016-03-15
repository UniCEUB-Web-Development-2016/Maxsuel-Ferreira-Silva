<?php
include "Math.php";
$math = new Math();
// echo $math->calculateCircleArea($_POST["radius"]);
echo $math->getHipotenusa($_POST["catetoAdj"],$_POST["catetoOp"]);
