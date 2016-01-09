<?php
//index.php

include "configuracao.php";

@$sql = mysql_query("SELECT * FROM categoria ORDER BY id DESC");

@$row = mysql_num_rows($sql);

?>
<html>
<head>
	<title>Sistema de estoque ServiceIT</title>
</head>
<body>

	<a href="addcategoria.php">Adicionar categoria</a>

	<table>
		<tr>
			<td>Id</td>
			<td>Categoria</td>
			<td>Descrição</td>
		</tr>
		<?
			while($linha = mysql_fetch_assoc($sql)){
		?>
		<tr>
			<td><? echo $linha['id'];?></td>
			<td><? echo $linha['categoria'];?></td>
			<td><? echo $linha['descricao'];?></td>
		</tr>
		<? 
		
		}
		
		if($row == 0 ){
			echo "<tr><td> Nenhum regitro no cadastro.</td></tr>";
		
		}	
		?>
	</table>
	

</body>
</html>