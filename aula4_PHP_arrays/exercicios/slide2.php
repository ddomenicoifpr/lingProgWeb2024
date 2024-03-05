<?php

$linha1 = array("nome" => "Manuel de Medeiros", "end" => "Rua das Acácias", 
                "cidade" => "Foz do Iguaçu", "uf" => "PR");
$linha2 = array("nome" => "Juliana de Amaral", "end" => "Rua dos Pinheiros", 
                "cidade" => "Fpolis", "uf" => "SC");
$linha3 = array("nome" => "Rodrigo Baidek", "end" => "Rua Dom Pedro I", 
                "cidade" => "Petrópolis", "uf" => "RJ");
$linha4 = array("nome" => "Fabíola da Silva", "end" => "Rua Chile", 
                "cidade" => "Guarulho", "uf" => "SP");

$linhas = array($linha1, $linha2, $linha3, $linha4);

echo "<table border='1'>";
//Cabeçalho
echo "<tr>";
echo "<th>Nome</th>";
echo "<th>Endereço</th>";
echo "<th>Cidade</th>";
echo "<th>UF</th>";
echo "</tr>";

//Linhas
foreach($linhas as $l) {
    echo "<tr>";

    //Solução acessando as posições do vetor
    /*echo "<td>" . $l['nome'] . "</td>";
    echo "<td>" . $l['end'] . "</td>";
    echo "<td>" . $l['cidade'] . "</td>";
    echo "<td>" . $l['uf'] . "</td>";*/

    //Solução percorrendo o array e imprimindo seu dados
    foreach($l as $dado)
        echo "<td>" . $dado . "</td>";
    echo "</tr>";
}

echo "</table>";