<?php 

// Funções que podem ser usadas com arrays
$nomes = array("gustavo", "leticia");
echo is_array($nomes);
// Verifica se o parâmetro é array

echo "<br>";
echo in_array("gustavo", $nomes);
// Verifica se o primeiro parametro passado esta no array(segundo parametro).

echo "<br>";
$keys = array_keys($nomes);
print_r($keys);
// Funciona também com arrays associativos

echo "<br>";
$values = array_values($nomes);
print_r($values);
// Retorna um array com os valores do array

$bolacha = array("Jucurutu", "cream cracker");
$biscoito = array("Treloso");
$bolachaOuBiscoito = array_merge($bolacha, $biscoito);

echo "<br>";
print_r($bolachaOuBiscoito);
// Merge junta o conteudo de dois arrays

?>