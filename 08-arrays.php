<?php

// Arrays
$cactos = array("Suculenta", "Cacto", "Espinhoso");

print_r($cactos);
echo "<br>";

echo $cactos[0];
echo "<br>";
echo $cactos[1];
echo "<br>";
echo $cactos[2];

$plantas = array(1=>"amoreira", 4=>"Alecrim", 2=>"limoeiro");

$plantas[0] = "Pimentão vermelho";

print_r($plantas);
echo "<br>";
echo $plantas[0];

// Count - Exibe a quantidade que elementos de um array
echo "<br>";
echo count($cactos);
echo "<br>";
echo count($plantas);

// Foreach
foreach ($cactos as $valor) {
	echo "<br>".$valor;
}

echo "<br>";

// Arrays associativos
$pessoa = array("nome" => "Cristovao", "idade" => 23, "altura" => 1.83);
$pessoa["cidade"] = "São miguel do gostoso";

echo $pessoa["nome"];

foreach ($pessoa as $indice => $valor) {
	echo $indice.": ".$valor."<br>";
}

// Arrays multidimensionais
$jardim = array("cactos"=> array("Planteiro", "Suculenta", "Espinhoso", "Florido"),
	"plantas" => array("Pimentão", "amoreira", "Pé de maracuja", "Alecrim", "Limoeiro")
);


echo $jardim["cactos"][0];
echo "<br>";

foreach ($jardim["cactos"] as $indice => $value) {
	echo $indice.": ".$value."<br>";
}
?>