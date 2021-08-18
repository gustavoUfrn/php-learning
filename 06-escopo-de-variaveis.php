<?php 

$nome = "Roberio boberto";

function exibeNome() {
	global $nome; // Adicionado depois
	echo "$nome <hr>";
}

exibeNome();
// Isso gera um erro, pq a variavel é indefinida, $nome é um escopo local e function um escopo local

function exibeLocal(){
	global $cidade;
	$cidade = 'Rio 30 de fevereiro <hr>';
}

exibeLocal();
echo $cidade;
// Funciona apenas pq na função tem a definição global, assim o echo consegue ver "$cidade"

$a = 1;
$b = 2;
$c = 3;

function soma(){
	echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];

	// GLOBALS é um array associativo onde o nome da variavel é a chave do array
}

soma();

?>