<?php

//soma 
function sum($a, $b){
return $a + $b;
}
echo sum(45, 45);
echo PHP_EOL;

//subtração
$subtraction = fn(int $a, int $b) => $a - $b;
echo $subtraction(45, 30);
var_dump($subtraction);

?>