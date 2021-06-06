<?php
	//Conexão local
	//$conexao = mysqli_connect("localhost","root","","bdAdm") or die("Erro de conexão");
	
	//Conexão remota
	$conexao = mysqli_connect("sql10.freemysqlhosting.net","sql10417342","IGRC1fZI1H","sql10417342") or die("Erro de conexão");
	mysqli_query($conexao,"set names 'utf8'");
?>
