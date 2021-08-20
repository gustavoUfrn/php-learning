<?php

for ($contador=0; $contador <= 10; $contador++):
	echo "O contador é $contador <br>";
endfor;

echo "<hr>";

$cores = array("Verde", "Vermelho", "Azul");

foreach ($cores as $key => $valor) {
	echo "$key: $valor <br>";
}

?>