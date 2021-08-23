<?php

// Criando funções
function exibirNome($nome){
	echo "$nome";
}

exibirNome("Gustavo");
echo "<hr>";

function calcularMedia($number, $number_1, $number_2, $number_3){
	$media = ($number+ $number_1+  $number_2+ $number_3)/4;
	
	echo $media;
}

calcularMedia(10, 10, 10, 3);

?>