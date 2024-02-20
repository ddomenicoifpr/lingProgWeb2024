<?php 

$n1 = 5;
$n2 = 4;

//A
$exp = 1;
for($i=0; $i<$n2; $i++)
    $exp = $exp * $n1;
echo $n1 . "^" . $n2 . " = " . $exp;
echo "<br>";

//B
$mult = 0;
for($i=0; $i<$n2; $i++)
    $mult = $mult + $n1;
echo $n1 . "x" . $n2 . " = " . $mult;
echo "<br>";

//C
$inverso = 1 / $n1;
echo "Inverso " . $n1 . " = " . $inverso;
echo "<br>";

//D
$soma = $n2 + ($n1/2);
echo "Soma " . $n2 . "+" . $n1 . "/" . "2 = " . $soma;
echo "<br>";

//E
$diferenca = $n1 - $n2;
echo $n1 . "-" . $n2 . " = " . $diferenca;
echo "<br>";