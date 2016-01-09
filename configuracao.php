<?php
//configuracao

$con = mysql_connect ("localhost","root","");

if(!$con) { die ("Erro na conexão com banco de dados!");}

$db = mysql_select_db("estoque",$con);

if(!$db) { die ("Banco de dados não encontrado");}


?>