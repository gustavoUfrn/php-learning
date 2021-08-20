<?php

// STRTOUPPER

$nome = "Gustavo Cristovao";
$novoNome = strtoupper($nome);
echo $novoNome;
echo "<br>";

// strtolower
$novoNome = strtolower($novoNome);
echo $novoNome;
echo "<br>";

// substr
$mensagem = "Olá mundo!";
echo substr($mensagem, 1, 5);
echo "<br>";

// strpad
$completarEspaco = "Qualq";
$espacoCompleto = str_pad($completarEspaco, 8, ".", STR_PAD_LEFT);
// LEFT, RIGHT, BOTH, or nothing
echo $espacoCompleto;
echo "<br>";

?>