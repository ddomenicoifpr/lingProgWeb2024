<?php

function linhaPresidente($pre) {
    echo "<tr>";
    echo "<td>" . $pre["numero"] . "</td>";
    echo "<td>" . $pre["nome"] . "</td>";
    echo "<td>" . $pre["inicio"] . "</td>";
    echo "<td>" . $pre["fim"] . "</td>";
    echo "</tr>";
}

//Declarar os array
$p1 = array("numero" => 16, "nome" => "Eurico Gaspar Dutra",
            "inicio" => 1946, "fim" => 1951);
$p2 = array("numero" => 17, "nome" => "Getúlio Vargas",
            "inicio" => 1951, "fim" => 1954);
$p3 = array("numero" => 18, "nome" => "Café Filho",
            "inicio" => 1954, "fim" => 1955);
$p4 = array("numero" => 19, "nome" => "Carlos Luz",
            "inicio" => 1955, "fim" => 1955);
$p5 = array("numero" => 20, "nome" => "Nereu Ramos",
            "inicio" => 1955, "fim" => 1956);
$p6 = array("numero" => 21, "nome" => "Juscelino Kubitschek",
            "inicio" => 1956, "fim" => 1961);

$presids = array($p1, $p2, $p3, $p4, $p5, $p6);

//Cabeçalho
echo "<table border=1>";
echo "<tr>";
echo "<th>Número</th>";
echo "<th>Nome</th>";
echo "<th>Início</th>";
echo "<th>Fim</th>";
echo "</tr>";

//Gerar as linhas com os dados
foreach($presids as $p) {
    linhaPresidente($p);
}

echo "</table>";