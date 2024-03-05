<?php

function geraLista($vetor) {
    echo "<ol>";
    foreach($vetor as $v)
        echo "<li>" . $v . "</li>";
    echo "</ol>";
}

//1- Criar os 4 arrays
$times = array("Grêmio", "Chapecoense", "Man. United", "Juventus", "Porto");
$frutas = array("Uva", "Maça", "Pera", "Abacate", "Laranja");
$alunoConversadores = array("Mayara", "Heitor", "Geazi", "Wesley", "Felipe");
$bandas = array("Kiss", "ACDC", "RHCP", "SoaD", "Metallica");
                

//2- Imprimir o conteúdo dos arrays em forma de lista numerada

//Solução com laços
/*
echo "<ol>";
foreach($times as $t)
    echo "<li>" . $t . "</li>";
echo "</ol>";

echo "<ol>";
foreach($frutas as $d)
    echo "<li>" . $d . "</li>";
echo "</ol>";

echo "<ol>";
foreach($alunoConversadores as $d)
    echo "<li>" . $d . "</li>";
echo "</ol>";

echo "<ol>";
foreach($bandas as $d)
    echo "<li>" . $d . "</li>";
echo "</ol>";
*/

geraLista($times);
geraLista($frutas);
geraLista($alunoConversadores);
geraLista($bandas);