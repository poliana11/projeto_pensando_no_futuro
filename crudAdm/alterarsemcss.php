<?php
	$id_codigo = $_POST['codigo']; //obtém a linha
	
	$nome = "";
	$sobrenome = "";
	$email = "";
	$matricula = "";
	$senha = "";
	$username = "";

	include('conexaoBD.php');
	
	if($id_codigo!=0){  		
		$sql = "SELECT * FROM usuario WHERE id = " .$id_codigo;
		
		$resultado = mysqli_query($conexao,$sql);
		//$linhas = mysqli_num_rows($resultado);
		$row = mysqli_fetch_array($resultado);
		
		//Popular as variáveis, colocar dados nas variaveis;
		//$codigo = $row['codigo'];
		$nome = $row['nome'];
		$sobrenome = $row['sobrenome'];
		$email = $row['email'];
		$matricula = $row['matricula'];
		$senha = $row['senha'];
		$username = $row['username'];

		mysqli_close($conexao); // fecha conexão
	}
?>
<!DOCTYPE html>
<html>
   <head>
	  <meta charset="utf-8">
      <title>Alterar informações administrador</title>
	  <script type="text/javascript" src="funcoes.js"> </script>
	</head>
<body>
    <h1>Alterar informações administrador</h1>
	<form id="formulario" method="post" action="actions.php" name="formulario">
		
		
		<input type="hidden" id="id_acao" name="acao"/> <!-- Controle "Escondido" -->
		
		<input type="hidden" id="id_identificacao" name="identificacao" value="<?php 
																				echo $id_codigo;
																				?>"/> <!-- Controle "Escondido" -->
		<label>Nome:</label>
		<input type="text" name="nome" id="id_nome" size = "15" maxlength = "15" required value="<?php echo $nome;?>"/><br />

		<label>Sobrenome:</label>
		<input type="text" name="sobrenome" id="id_sobrenome" size = "15" maxlength = "15" required value="<?php echo $sobrenome;?>"/><br />

		<label>Email:</label>
		<input type="text" name="email" id="id_email" size = "15" maxlength = "15" required value="<?php echo $email;?>"/><br />

		<label>Matricula:</label>
		<input type="text" name="matricula" id="id_matricula" size = "15" maxlength = "15" required value="<?php echo $matricula;?>"/><br />

		<label>Senha:</label>
		<input type="text" name="senha" id="id_senha" size = "15" maxlength = "15" required value="<?php echo $senha;?>"/><br />

		<label>Usuário:</label>
		<input type="text" name="username" id="id_username" size = "15" maxlength = "15" required value="<?php echo $username;?>"/><br />
		
		<input type="button" value="Salvar" class="botao" onclick="executaPost('formulario','salvar_alt');"/> <br > <br />
		
		<!--
		<input type="button" value="Consultar"  class="botao" onclick="executaPost('formulario','consultar');"/>
		-->
	</form>  
	</body>
</html>