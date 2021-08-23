<?php

$number = 1234.56;
$preco = number_format($number, 2,",", ".");
// número, casas decimais(2), separador decimal(,), separador de milhares(.)
echo "O valor do produto é $preco";
echo "<br>";

echo round(3.2);
echo "<br>";
echo round(3.49);
echo "<br>";
echo round(3.51);
echo "<br>";
echo round(3.8);
echo "<br>";

echo ceil(4.000000000001);
echo "<br>";
echo floor(4.999999999999);
echo "<br>";

// Gera um número aleatorio
echo rand(1,10);
?>