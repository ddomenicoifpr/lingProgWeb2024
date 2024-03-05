<?php

$numeros = array(4, 67, 12, 34, 1, 98, 54, 32, 86, 55);

$soma = 0;
foreach($numeros as $n) 
    $soma += $n;

$media = $soma / count($numeros);

echo "A média dos números do array: " . $media;