<?php
				//session_start();
				//include "Produtos.php";

				//pega o nome da função que foi passada para o campo hidden
				$funcao = $_REQUEST["acao"]; //$funcao vai receber "consultar" ou "salvar"

				if (function_exists($funcao)) { //Se existe a função "consultar" ou a função "salvar"
					call_user_func($funcao); //Chama a função
				}

				function salvar(){
					include('conexaoBD.php');
					//$codigo = $_POST["codigo"];
					//$id = $_POST["identificacao"];
					$nome = $_POST["nome"];
					$oferta = $_POST["oferta"];
					$modalidade = $_POST["modalidade"];
					$habilitacao = $_POST["habilitacao"];
					$localizacao = $_POST["localizacao"];
					$eixoTec = $_POST["eixoTec"];
					$turno = $_POST["turno"];
					$vagas = $_POST["vagas"];
					$periodo = $_POST["periodo"];
					$horas = $_POST["horas"];
					$integralizacao = $_POST["integralizacao"];
					$integralizacaoMax = $_POST["integralizacaoMax"];
					$diretorEns = $_POST["diretorEns"];
					$coordenador = $_POST["coordenador"];
					$justificativa = $_POST["justificativa"];
					$objetivoG = $_POST["objetivoG"];
					$objetivoE = $_POST["objetivoE"];
					$competencias = $_POST["competencias"];
					$atuacao = $_POST["atuacao"];
					$matrizCurricular = $_FILES["matrizCurricular"];
					$infraestrutura = $_POST["infraestrutura"];
					$imagem = $_FILES["imagem"];
					$linkppc = $_FILES["linkppc"];

					// Se a foto estiver sido selecionada
					if (!empty($imagem["name"])) {
						/*echo "ggggggg ";
						// Largura máxima em pixels
						$largura = 500;
						// Altura máxima em pixels
						$altura = 500;
						// Tamanho máximo do arquivo em bytes
						$tamanho = 25000;

						$error = array();
						// Verifica se o arquivo é uma imagem
						if (!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $imagem["type"])) {
							$error[1] = "Isso não é uma imagem.";
						}
						// Pega as dimensões da imagem
						$dimensoes = getimagesize($imagem["tmp_name"]);
						// Verifica se a largura da imagem é maior que a largura permitida
						if ($dimensoes[0] > $largura) {
							$error[2] = "A largura da imagem não deve ultrapassar " . $largura . " pixels";
						}
						// Verifica se a altura da imagem é maior que a altura permitida
						if ($dimensoes[1] > $altura) {
							$error[3] = "Altura da imagem não deve ultrapassar " . $altura . " pixels";
						}
						// Verifica se o tamanho da imagem é maior que o tamanho permitido
						if ($imagem["size"] > $tamanho) {
							$error[4] = "A imagem deve ter no máximo " . $tamanho . " bytes";
						}
						// Se não houver nenhum erro
						if (count($error) == 0) {*/
						//echo "aquii    ";
						// Pega extensão da imagem
						preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);

						// Gera um nome único para a imagem
						$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
							//echo $nome_imagem . "aaaaaaaaaaaaaa";
						// Caminho de onde ficará a imagem
						$caminho_imagem = "images/" . $nome_imagem;

						// Faz o upload da imagem para seu respectivo caminho
						move_uploaded_file($imagem["tmp_name"], $caminho_imagem);
						// Insere os dados no banco
						/*$sql = mysql_query("INSERT INTO usuarios VALUES ('', '".$nome."', '".$email."', '".$nome_imagem."')");
							// Se os dados forem inseridos com sucesso
							if ($sql){
								echo "Você foi cadastrado com sucesso.";
							}*/
						//}
						// Se houver mensagens de erro, exibe-as
						/*if (count($error) != 0) {
							foreach ($error as $erro) {
								echo $erro . "<br />";
							}
						}*/
					}
					// Se a foto estiver sido selecionada
					if (!empty($matrizCurricular["name"])) {
						//echo "aquii    ";
						// Pega extensão da imagem
						preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $matrizCurricular["name"], $ext);

						// Gera um nome único para a imagem
						$nome_curriculo = md5(uniqid(time())) . "." . $ext[1];
							//echo $nome_curriculo . "aaaaaaaaaaaaaa";
						// Caminho de onde ficará a imagem
						$caminho_curriculo = "images/" . $nome_curriculo;

						// Faz o upload da imagem para seu respectivo caminho
						move_uploaded_file($matrizCurricular["tmp_name"], $caminho_curriculo);
					}
					//
					if(isset($_FILES['linkppc'])){
						$extensao = strtolower(substr($_FILES['linkppc']['name'], -4)); //pega a extensao do arquivo
						$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
						$diretorio = "images/"; //define o diretorio para onde enviaremos o arquivo
						move_uploaded_file($_FILES['linkppc']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
					
						//$sql_code = "INSERT INTO cursos (codigo, arquivo, data) VALUES(null, '$novo_nome', NOW())";
					}

					/* MOSTRA NA TELA O Q FOI SALVO echo "Salvando: " . $nome . ", " . $oferta . ", " . $modalidade . ", " . $habilitacao . ", " . $localizacao . ", " . $eixoTec . ", "
						. $turno . ", " . $vagas . ", " . $periodo . ", " . $horas . ", " . $integralizacao . ", " . $integralizacaoMax . ", "
						. $diretorEns . ", " . $coordenador . ", " . $justificativa . ", " . $objetivoG . ", " . $objetivoE . ", " . $competencias . ", "
						. $atuacao . ", " . $matrizCurricular . ", " . $infraestrutura . ", " . $imagem . ", " . $linkppc . "<br />";
					*/
					$sql = "INSERT INTO cursos (nome,oferta,modalidade,habilitacao,localizacao,eixoTec,
					turno,vagas,periodo,horas,integralizacao,integralizacaoMax,
					diretorEns,coordenador,justificativa,objetivoG,objetivoE,competencias,
					atuacao,matrizCurricular,infraestrutura,imagem,linkppc) VALUES ";

					$sql = $sql . "('$nome','$oferta','$modalidade','$habilitacao','$localizacao','$eixoTec',
					'$turno','$vagas','$periodo','$horas','$integralizacao','$integralizacaoMax',
					'$diretorEns','$coordenador','$justificativa','$objetivoG','$objetivoE','$competencias',
					'$atuacao','$nome_curriculo','$infraestrutura','$nome_imagem','$novo_nome');";

					// MOSTRA DADOS NA TELA echo "Instrução: " . $sql . "<br>";

					$resultado = mysqli_query($conexao, $sql);

					//echo "Resultado = " . $resultado . "<br>";
					if ($resultado == 1) {
            header("location: incluirOK.php");
						//echo "<p align=\"center\" id=\"texto3\">Inserção do curso " . $nome . " realizada com sucesso!<br></p>";
					} else {
            header("location: incluirNAO.php");
            //echo "Não foi possível inserir!" . "<br>";
					}
					mysqli_close($conexao);
					//echo "<br><br><a href=\"http://localizacaohost/ProjTCC/crudAdm/crudCursos/formulario.php\"> VOLTAR</a>";
				}

?>