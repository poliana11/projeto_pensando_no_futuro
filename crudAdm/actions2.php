<?php
				//session_start();
				//include "Produtos.php";

				//pega o nome da função que foi passada para o campo hidden
				$funcao = $_REQUEST["acao"]; //$funcao vai receber "consultar" ou "salvar"

				if (function_exists($funcao)) { //Se existe a função "consultar" ou a função "salvar"
					call_user_func($funcao); //Chama a função
				}
				

				function salvar()
				{
					include('conexaoBD.php');
					//$codigo = $_POST["codigo"];
					//$id = $_POST["identificacao"];
					$nome = $_POST["nome"];
					$sobrenome = $_POST["sobrenome"];
					$email = $_POST["email"];
					$matricula = $_POST["matricula"];
					$senha = $_POST["senha"];
					$username = $_POST["username"];


					//echo "Salvando: " . $nome . ", " . $sobrenome . ", " . $email . ", " . $matricula . ", " . $senha . ", " . $username . "<br />";

					$sql = "INSERT INTO usuario (nome,sobrenome,email,matricula,senha,username) VALUES ";
					$sql = $sql . "('$nome','$sobrenome','$email','$matricula','$senha','$username');";

					//echo "Dados cadastrados: <br>" . 
					$nome . "<br>" . $sobrenome . "<br>" . $email . "<br>" . $matricula . "<br>" . 
					$senha . "<br>" . $username . "<br><br>";

					$resultado = mysqli_query($conexao, $sql);

					//echo "Resultado = " . $resultado . "<br>";
					if ($resultado == 1) {
						//echo "Cadastro realizado com sucesso!" . "<br>";
						header("location: incluirOK.php");
					} else {
						//echo "Não foi possível realizar o cadastro!" . "<br>";
						header("location: incluirNAO.php");
					}
					mysqli_close($conexao);
					//echo "<a href=\"http://localhost/ProjTCC/crudAdm/formulario.php\"> VOLTAR</a>";
				}

?>
			