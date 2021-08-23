<!DOCTYPE html>
<html>
<head>
	<title>Formularios</title>
</head>
<body>

<!-- 	
	VALIDATE FILTERS
	Funções(filter_input - filter_var)
	FILTER_VALIDATE_INT
	FILTER_VALIDATE_EMAIL
	FILTER_VALIDATE_FLOAT
	FILTER_VALIDATE_IP
	FILTER_VALIDATE_URL
-->

<?php
if(isset($_POST['enviar-formulario'])):
	$erros = array();

	if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
		$erros[] = "Idade tem que ser um inteiro";
	endif;

	if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
		$erros[] = "Campo email preenchido incorretamente!";
	endif;

	if(!$altura = filter_input(INPUT_POST, 'altura', FILTER_VALIDATE_FLOAT)):
		$erros[] = "Altura precisa ser FLOAT";
	endif;

	if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
		$erros[] = "url inválida!";
	endif;

	if(!empty($erros)):
		foreach ($erros as $erro): 
			echo "<li> $erro </li>";
		endforeach;
	else:
		echo "Todos os campos então corretos!";
	endif;
endif;

?>

	<!-- Utilizando POST -->
	<!-- Para utilizar o metodo get é só mudar para method="GET" -->
	<!-- TO REMEMBER: action="dados.php" -->
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		Idade: <input type="text" name="idade"><br>
		Email: <input type="text" name="email"><br>
		Altura: <input type="text" name="altura"><br>
		ULR: <input type="text" name="url"><br>
		<button type="submit" name="enviar-formulario"> Enviar </button>
	</form>

	<!-- <a href="dados.php?idade=25&sobrenome=Alessandro">Enviar dados via get</a> -->
</body>
</html>