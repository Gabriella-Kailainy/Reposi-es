<?php

//calculando area de um circulo
function area($raio)
{
    return pi() * ($raio * $raio);
};
echo "Área do circulo:" . area(3);
echo PHP_EOL;

//calculando area de um triangulo
$triangulo = fn($b, $a) => $b * $a / 2;
echo "Área do triângulo:" . $triangulo(10, 10);
echo PHP_EOL;

//calculando pitagoras
$pitagoras = function ($c, $c2) {
    return pow($c, 2) + pow($c2, 2);
};
echo "Teorema de pitágoras:" . $pitagoras(2, 5);
echo PHP_EOL;

//formula de bhaskara
function delta($a, $b, $c) {
    $delta = (pow($b, 2) - 4) * $a * $c;
    $positivo = (-$b + sqrt($delta)) / 2 * $a;
    $negativo = (-$b - sqrt($delta)) / 2 * $a;
       return [$delta, $positivo, $negativo];
} 
echo "Delta: " . delta(1, 5, 2)[0];
echo PHP_EOL;
echo "X1: " . delta(1, 5, 2)[1];
echo PHP_EOL;
echo "X2: " . delta (1, 5, 2)[2];

?>