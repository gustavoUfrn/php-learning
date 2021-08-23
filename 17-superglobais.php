<?php

// Variaveis pré-definidas do php
/*
	$GLOBALS - Usada para acesar variaveis globais de qualquer lugar do script php
	$_SERVER - Contém informações como cabeçalhos, caminhos e locais de script, é uma array com varios indices
	$_POST - As informações são passada pelo corpo da mensagem HTTP
	$_GET - As informações são passadas pela URL
	$_FILES - 
	$_ENV - 
	$_REQUEST -
	$_COOKIE - 
	$_SESSION - 
*/

$x = 0.5;
$y = 15;

function soma(){
	echo $GLOBALS['x'] + $GLOBALS['y'];
	// Função não funciona sem $GLOBALS ($x + $y) por isso tem que ser feita assim
}

soma();
echo "<br>";

echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";
echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['REMOTE_ADDR']."<br>";
?>
