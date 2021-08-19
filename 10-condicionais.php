<?php

$number = 5;

if ($number >= 7):
	echo "Número acima da média";
elseif($number == 5):
	echo "Número abaixo da média e igual a 5";
else:
	echo "Número abaixo da média";
endif;

echo "<hr>";
$media = 6.9;
echo ($media >= 7) ? "Aprovado" : "Reprovado";

//

echo "<hr>";
$cor = "amarelo";
switch ($cor) {
	case 'amarelo':
		echo "É a minha cor favorita"; 
		break;
	case 'preto':
		echo "Minha segunda cor favorita";
		break;
	default:
		echo "Todas as cores são realmente bonitas";
		break;
}

?>