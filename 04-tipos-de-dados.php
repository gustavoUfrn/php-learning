<?php

// Tipos de dados suportados por php
/*** Escalares ***/

// String
$nome = "String";

var_dump($nome);
//var_dump mostra informações sobre a variavel

if(is_string($nome)):
	echo "É uma string <hr>";
else:
	echo "Não é uma string <hr>";
endif;

// Int
$idade = 7010;
var_dump($idade);

if(is_int($idade)):
	echo "É um int <hr>";
else:
	echo "Não é um int <hr>";
endif;

// Float
$altura = 18.3;
var_dump($altura);

if(is_float($altura)):
	echo "É um float <hr>";
else:
	echo "Não é um float <hr>";
endif;

// boolean
$admin = true;
var_dump($admin);

if(is_bool($admin)):
	echo "É um bool <hr>";
else:
	echo "Não é um bool <hr>";
endif;

/*** Compostos ***/

// Array
$gustavo = array("Gustavo", 30, 1.83);

var_dump($gustavo);

if(is_array($gustavo)):
	echo "É um array <hr>";
else:
	echo "Não é um array <hr>";
endif;

// Objetos
class Cliente {
	public $nome;
	public function atribuirNome($nome) {
		$this->$nome = $nome;
	}
}

// Instancia de cliente
$cliente = new Cliente();
$cliente->atribuirNome("Rogerinho do ingá");
var_dump($cliente);

if(is_object($cliente)):
	echo "É um objeto <hr>";
else:
	echo "Não é um objeto <hr>";
endif;

/***** Compostos *****/
// NULL - Variavel que não tem valor atribuido, ou tem um valor "nulo".

// Resource tipo de dado utilizado para fazer referencia a recursos externos, conexção com BD's, manipulação de arquivos.

?>