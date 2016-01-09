<?php
// adicionar categorias

include "configuracao.php";

?>
<html>
<head>
	<title>Sistema de estoque ServiceIT</title>
</head>
<body>
	<form action="adccategoria.php" method="post" >
		<label>Categoria:</label>
		<input type="text" name="categoria"/>
		<label>Descrição:</label>
		<textarea rows="10" name="descricao"></textarea>
		<button type="submit">Enviar</button>
	</form>


	
</body>
</html>

