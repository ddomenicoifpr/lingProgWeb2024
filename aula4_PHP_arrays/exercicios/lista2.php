<?php

$numeros1 = array(34, 98, 54,  86, 200);
$numeros2 = array();

//Adicionar os números do array 1 no array 2
foreach($numeros1 as $num)
    array_push($numeros2, $num);

//Imprimir os dados do array 2
echo "<h3>Números do array 2</h3>";
echo "<ul>";
foreach($numeros2 as $num)
    echo "<li>" . $num . "</li>";

echo "</ul>";