<?php 

//Tabela do número 6
 
echo "WHILE<br>";
$i = 1;
while($i <= 10) {
    echo "6 x " . $i . " = " . (6*$i) . "<br>";
    $i++;
}

echo "<br>DO-WHILE<br>";
$i = 1;
do {
    echo "6 x " . $i . " = " . (6*$i) . "<br>";
    $i++;
} while($i <= 10);

echo "<br>FOR<br>";
for($i=1; $i<=10; $i++) {
    echo "6 x " . $i . " = " . (6*$i) . "<br>";
}

