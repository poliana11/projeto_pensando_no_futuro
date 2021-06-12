<?php
	//Conexão local
	//$conexao = mysqli_connect("localhost","root","","bdAdm") or die("Erro de conexão");
	
	//Conexão remota
	$conexao = mysqli_connect("remotemysql.com","1La9BEFfXZ","NWkaf5C63U","1La9BEFfXZ") or die("Erro de conexão");
	mysqli_query($conexao,"set names 'utf8'");

	
?>
