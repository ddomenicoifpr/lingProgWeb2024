<?php

$n1 = 1;
$n2 = 1;

for($i=0; $i<8; $i++) {
    echo $n1 . " ";
    $aux = $n1 + $n2;
    $n1 = $n2;
    $n2 = $aux;
}