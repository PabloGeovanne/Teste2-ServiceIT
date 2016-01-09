<?php
// adicionar categorias

include "configuracao.php";

$categoria = $_POST['categoria'];

$descricao = $_POST['descricao'];

$sql = mysql_query("INSERT INTO categoria(id, categoria,descricao) values (NULL, '$categoria','descricao')");

if(!sql){
	
	echo("<script type='text/javasript'> alert('Erro ao incluir item!'); location.href='index.php'; </script>");
	
	}else{
		
		header("location:index.php");
	
}

?>