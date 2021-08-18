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

array_pop($bolachaOuBiscoito);
// Deleta o ultimo valor do array

array_shift($bolachaOuBiscoito);
// Deleta a primeira posição do array

echo "<br>";
print_r($bolachaOuBiscoito);

// Serve para adicionar um ou mais elementos no inicio do array
array_unshift($bolachaOuBiscoito, "Sortidas", "negresco");

echo "<br>";
print_r($bolachaOuBiscoito);

$livros = array("A ruptura", "O trono de vidro", "Invísivel");
$autores = array("Christie Golden", "Sarah J.", "David levithan");

$bookShelf = array_combine($autores, $livros);
// Associa dois arrays

echo "<br>";
print_r($bookShelf);

$sum = array(5, 6, 7, 10);
echo "<br>";
echo array_sum($sum);
// Faz a soma de todos os items no array

$data = "20/04/1999";
$novaData = explode('/', $data);
// Transforma a string em um array
echo "<br>";
print_r($novaData);

echo "<br>";
echo implode("/", $bolachaOuBiscoito);

?>