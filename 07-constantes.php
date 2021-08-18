<?php

// Constantes
define("nome", "José");
define("numero", 15);
define("float_Point", 10.4);
define("logicos", true);
define("notas", ["10", "10", "4.7"]);
// Mesmo que seja atribuido um novo valor, ele não redefine a variavel Nome, é possivel com todos os tipos.

echo 'Meu nome é '.nome.', meu número preferido é '.numero.' e tenho '.float_Point.' de altura, e prefiro logicos do tipo '.logicos.' <br>';

echo 'Nota número três = '.notas[2].' <br>';

// Constantes são automaticamente globais

function exibeVariavel(){
	echo float_Point;
}

exibeVariavel();

?>