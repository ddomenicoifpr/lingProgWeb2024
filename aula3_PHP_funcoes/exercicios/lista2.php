<?php

function area($base, $altura) {
    $area = $base * $altura;
    return $area;
}

function perimetro($base, $altura) {
    $perimetro = $base + $base + $altura + $altura;
    return $perimetro;
}

//Programa principal
echo "Retângulo de 5cm x 10cm: <br>";
echo "- Área: " . area(5, 10) . "cm²<br>";
echo "- Perímetro: " . perimetro(5, 10) . "cm<br>";
echo "<br><br>";

echo "Retângulo de 6cm x 4cm: <br>";
echo "- Área: " . area(6, 4) . "cm²<br>";
echo "- Perímetro: " . perimetro(6, 4) . "cm<br>";
echo "<br><br>";

echo "Retângulo de 20cm x 7cm: <br>";
echo "- Área: " . area(20, 7) . "cm²<br>";
echo "- Perímetro: " . perimetro(20, 7) . "cm<br>";
echo "<br><br>";