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

// str_pad
$completarEspaco = "Qualq";
$espacoCompleto = str_pad($completarEspaco, 8, ".", STR_PAD_LEFT);
// LEFT, RIGHT, BOTH, or nothing
echo $espacoCompleto;
echo "<br>";

// str_repeat
$string = str_repeat("Amongus", 4);
echo $string;
echo "<br>";

// strlen
echo strlen($string);
echo "<br>";

// str_replace
$texto = "Olá, meu nome é Rogerio";
$novoTexto = str_replace("Rogerio", "Gustavo", $texto);

echo $novoTexto;
echo "<br>";

// strpos
// Posição inicial to texto inserido
echo strpos($novoTexto, "Gustavo");

?>