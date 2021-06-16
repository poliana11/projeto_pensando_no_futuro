<?php include __DIR__ . '/../../detectScreen.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Actions</title>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script type="text/javascript" src="funcoes.js"> </script>
</head>

<body style="background-size: 100%; ">
    <style>
      nome2 {
        /*titulo médio*/
        margin-top: 5em;
        margin-left: 2em;
        font-size: 50px;
        font-weight: 800;
        color: #0B610B;
        text-align: center;
      }

      h1 {
        /*titulo grande*/
        margin-top: 1em;
        margin-left: 2em;
        font-size: 100px;
        color: #008B8B;
      }

      #imagem {
        /*width: 1349px;
        height: 600px;*/
        max-width: 100%;
        height: auto;
      }

      #texto {
        position: absolute;
        margin-top:-50px;
        font-size: 80px;
        color: #0B615E;
        text-align: center;
        top: 50%; left: 50%; margin-right: -50%; transform: translate(-50%, -50%)
      }

      @media screen and (max-width: 767px) {
        #texto {
          position: absolute;
          margin-top: -150px;
          font-size: 40px;
          color: #0B615E;
          text-align: center;
          top: 50%; left: 50%; margin-right: -50%; transform: translate(-50%, -50%)
        }
      }

      #texto2 {
        position: absolute;
        margin-top: 80px;
        font-size: 30px;
        color: #424242;
        text-align: center;
        top: 50%; left: 50%; margin-right: -50%; transform: translate(-50%, -50%)
      }

      @media screen and (max-width: 767px) {
        #texto2 {
          position: absolute;
          margin-top: -30px;
          font-size: 20px;
          color: #424242;
          text-align: center;
          top: 50%; left: 50%; margin-right: -50%; transform: translate(-50%, -50%)
        }
      }

      #botao1 {
        position: absolute;
        margin-top: 10px;
        margin-left: 13em;
        font-size: 30px;
        color: #424242;
        text-align: center;
      }

      @media screen and (max-width: 767px) {
        #margem_lateral {
          margin-left: 0.5em;
          margin-right: 0.5em;
        }
      }

      @media screen and (min-width: 1200px) {
        #margem_lateral {
          margin-left: 1em;
          margin-right: 1em;
        }
      }

      @media screen and (max-width: 767px) {
        #logo {
          height: 80px !important;
          width: 100px !important;
        }
      }

      @media screen and (max-width: 767px) {
        #menu {
          /*position: absolute !important;
          margin-top: -370px !important;*/
          border-color: #008B8B !important;
          height: 40px !important;
          /*margin-left: -30px;*/
        }
      }

      @media screen and (min-width: 1200px) {
        #menu {
          /*position: absolute !important;
          margin-top: -69.7em !important;*/
          border-color: #008B8B !important;
          height: 100px !important;
          /*margin-left: -150px;*/
          margin-left: inherit;
          margin-right: inherit;
        }
      }

      @media screen and (max-width: 767px) {
        #menu2 {
          border-color: #008B8B;
          height: 30px;
        }
      }

      @media screen and (min-width: 1200px) {
        #menu2 {
          border-color: #008B8B;
          height: 60px;
          width: 84em;
        }
      }

      @media screen and (max-width: 767px) {
        #link_pi {
          font-size: 10px;
          color: white;
          height: 30px;
          border-color: #008B8B;
          background-color: #008B8B;
        }
      }

      @media screen and (min-width: 1200px) {
        #link_pi {
          font-size: 20px;
          color: white;
          height: 60px;
          border-color: #008B8B;
          background-color: #008B8B;
        }
      }

      @media screen and (max-width: 767px) {
        #links {
          height: 10px;
          font-size: 10px;
          color: white;
        }
      }

      @media screen and (min-width: 1200px) {
        #links {
          height: 60px;
          font-size: 20px;
          color: white;
        }
      }

      @media screen and (max-width: 767px) {
        #adm {
          margin-top: -8em;
          margin-left: 18em;
          height: 10px;
        }
      }

      @media screen and (min-width: 1200px) {
        #adm {
          margin-top: -3em;
          margin-left: 78em;
          height: 60px;
        }
      }

      @media screen and (max-width: 767px) {
        #img_fundo {
          max-width: 100%;
          height: auto;
        }
      }

      @media screen and (min-width: 1200px) {
        #img_fundo {
          /*margin-top: -120px;
          left: 0px;
          width: 1349px;
          height: 600px;:*/
          max-width: 100%;
          height: auto;
          display: block;
          margin-left: auto;
          margin-right: auto;
        }
      }

	  @media screen and (max-width: 767px) {
        #margem {
            margin-right: 10px;
        }
      }
	  @media screen and (max-width: 767px) {
        #moldura {
          background-color: white; 
          height: 400px; 
          border-color: teal; 
          margin-top: 3em;
        }
      }
      @media screen and (max-width: 767px) {
        #botao_voltar {
            position: absolute;
            margin-top: 20px;
            font-size: 15px;
            color: teal;
            text-align: center;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%)
        }
    }
    @media screen and (min-width: 1200px) {
        #botao_voltar {
            position: absolute;
            margin-top: 120px;
            font-size: 20px;
            color: teal;
            text-align: center;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%)
        }
    }
    </style>
    
	<img src="images/logo8.png" id="logo" class="mg-fluid rounded float-right" style="position:absolute; top:50px;  max-height: 160px; max-width: 200px; right: 20px;" />
	<div id="texto"><b>Alterar dados curso</b></div>
	<div id="texto2"></div>

	<?php $tela= $_SESSION['screenInfo']['widthTela']; 
		    //$tela = 500; ?>
		  
	<?php if ($tela > 767) { ?>
		<div id="texto2"> </div>
    <?php } ?>  
	
     
    <?php if ($tela <= 767) { ?>
      <nav class="navbar navbar-expand-md navbar-light " style="background-color: #008B8B; ">
        <!--<a href="#" class="navbar-brand" style="color: white;">Menu</a>-->
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" style="color: white; border-color: white;">
          <span class="navbar-toggler-icon" style="color: white; border-color: white;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse" style="background-color: #008B8B;">
          <div class="navbar-nav">
            <a href="../../index3.php" class="nav-item nav-link" style="color: white;">Pagina inicial</a>
            <a href="../../instituicao.php" class="nav-item nav-link" style="color: white;">Instituição</a>
            <a href="http://forum-pensando-no-futuro.herokuapp.com/public/" class="nav-item nav-link" style="color: white;">Fórum</a>
            <a href="../../cursos.php" class="nav-item nav-link" style="color: white;">Cursos</a>
            <a href="../../logout.php" class="nav-item nav-link" style="color: white;">Logout</a>
          </div>
          <div class="navbar-nav ml-auto">
            <li class="nav-item dropdown" >
              <a class="nav-link dropdown-toggle" style="color: white;" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Avançado</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="../../administrador.php" style="color: #008B8B;"><b>Administrador</b></a>
              </div>
            </li>
          </div>
        </div>
      </nav>
    <?php } ?>

    <?php if ($tela > 767) { ?>
      <!--<div class="fixed-top ">-->
      <div class="container">
        <nav class="nav nav-expand-md flex-column">
          <ul class="nav nav-tabs" style="position: absolute; border-color: #008B8B; height: 60px; max-width: 100%; margin-left: -119px; float: left;">
            <li class="nav-item" style="border-color: #008B8B; height: 60px;">
              <a class="nav-link" href="../../index3.php" style="font-size: 20px; color: white; height: 60px; border-color: #008B8B; background-color: #008B8B;">Pagina inicial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../instituicao.php" style="height: 60px; font-size: 20px; color: white;">Instituição</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://forum-pensando-no-futuro.herokuapp.com/public/" style="height: 60px; font-size: 20px; color: white;">Fórum</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../cursos.php" style="height: 60px; font-size: 20px; color: white;">Cursos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../logout.php" style="height: 60px; font-size: 20px; color: white;">Logout</a>
            </li>
            <div class="navbar-nav ml-auto">
              <li class="nav-item">
                <nav class="navbar-dark" style="margin-top: -3em; margin-left: 58em; margin-right: 2em;">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #008B8B; ">
                    <span class="navbar-toggler-icon" style="background-color: #008B8B;"></span>
                  </button>
                  <div class="collapse" id="navbarToggleExternalContent">
                    <div class="bg p-4" style="background-color: #008B8B; margin-left: -10em; margin-top: -2.5em; width: 217px;">
                      <a class="link" href="../../administrador.php" style="color: white; font-size: 20px;">Administrador</a>
                    </div>
                  </div>
                </nav>
              </li>
            </div>
          </ul>
        </nav>
      </div>
    <?php } ?>

  <img src="images/3.jpg" id="img_fundo" class="img-responsive" />
  
  <div class="container">
        <?php if ($tela <= 767) { ?>
        <div class="card mb-3" id="moldura">
            <div class="card-body">
                </br></br>
        <?php } ?>
			<div>
				<?php
				//session_start();
				//include "Produtos.php";

				//pega o nome da função que foi passada para o campo hidden
				$funcao = $_REQUEST["acao"]; //$funcao vai receber "consultar" ou "salvar"

				if (function_exists($funcao)) { //Se existe a função "consultar" ou a função "salvar"
					call_user_func($funcao); //Chama a função
				}
				function salvar_alt()
				{
					include('conexaoBD.php');
					$id = $_POST["identificacao"];
					//$codigo = $_POST["codigo"];
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

					if (!empty($imagem["name"])) {
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
					} else {
						$sql1 = "SELECT imagem FROM cursos WHERE id = " . $id;
						$resultado1 = mysqli_query($conexao, $sql1);
						//$linhas = mysqli_num_rows($resultado);
						$row = mysqli_fetch_array($resultado1);
						//Popular as variáveis, colocar dados nas variaveis;
						$imagem = $row['imagem'];
						$nome_imagem = $imagem;
					}
					//
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
					} else {
						$sql2 = "SELECT matrizCurricular FROM cursos WHERE id = " . $id;
						$resultado2 = mysqli_query($conexao, $sql2);
						//$linhas = mysqli_num_rows($resultado);
						$row = mysqli_fetch_array($resultado2);
						//Popular as variáveis, colocar dados nas variaveis;
						$matrizCurricular = $row['matrizCurricular'];
						$nome_curriculo = $matrizCurricular;
					}
					//
					if (!empty($linkppc["name"])) {
						if (isset($_FILES['linkppc'])) {
							$extensao = strtolower(substr($_FILES['linkppc']['name'], -4)); //pega a extensao do arquivo
							$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
							$diretorio = "images/"; //define o diretorio para onde enviaremos o arquivo
							move_uploaded_file($_FILES['linkppc']['tmp_name'], $diretorio . $novo_nome); //efetua o upload
							//$sql_code = "INSERT INTO cursos (codigo, arquivo, data) VALUES(null, '$novo_nome', NOW())";
						}
					} else {
						$sql3 = "SELECT linkppc FROM cursos WHERE id = " . $id;
						$resultado3 = mysqli_query($conexao, $sql3);
						//$linhas = mysqli_num_rows($resultado);
						$row = mysqli_fetch_array($resultado3);
						//Popular as variáveis, colocar dados nas variaveis;
						$linkppc = $row['linkppc'];
						$extensao = strtolower(substr($_FILES['linkppc']['name'], -4));
						$novo_nome = $linkppc . $extensao;
					}


					/* MOSTRA NA TELA DADOS SALVOS echo "Salvando: " . $nome . ", " . $oferta . ", " . $modalidade . ", " . $habilitacao . ", " . $localizacao . ", " . $eixoTec . ", "
						. $turno . ", " . $vagas . ", " . $periodo . ", " . $horas . ", " . $integralizacao . ", " . $integralizacaoMax . ", "
						. $diretorEns . ", " . $coordenador . ", " . $justificativa . ", " . $objetivoG . ", " . $objetivoE . ", " . $competencias . ", "
						. $atuacao . ", " . $matrizCurricular . ", " . $infraestrutura . ", " . $imagem . ", " . $linkppc . "<br />";
          */
					$sql = "UPDATE cursos SET";
					$sql = $sql . " nome='" . $nome . "',";
					$sql = $sql . " oferta='" . $oferta . "',";
					$sql = $sql . " modalidade='" . $modalidade . "',";
					$sql = $sql . " habilitacao='" . $habilitacao . "',";
					$sql = $sql . " localizacao='" . $localizacao . "',";
					$sql = $sql . " eixoTec='" . $eixoTec . "',";
					$sql = $sql . " turno='" . $turno . "',";
					$sql = $sql . " vagas='" . $vagas . "',";
					$sql = $sql . " periodo='" . $periodo . "',";
					$sql = $sql . " horas='" . $horas . "',";
					$sql = $sql . " integralizacao='" . $integralizacao . "',";
					$sql = $sql . " integralizacaoMax='" . $integralizacaoMax . "',";
					$sql = $sql . " diretorEns='" . $diretorEns . "',";
					$sql = $sql . " coordenador='" . $coordenador . "',";
					$sql = $sql . " justificativa='" . $justificativa . "',";
					$sql = $sql . " objetivoG='" . $objetivoG . "',";
					$sql = $sql . " objetivoE='" . $objetivoE . "',";
					$sql = $sql . " competencias='" . $competencias . "',";
					$sql = $sql . " atuacao='" . $atuacao . "',";
					$sql = $sql . " matrizCurricular='" . $nome_curriculo . "',";
					$sql = $sql . " infraestrutura='" . $infraestrutura . "',";
					$sql = $sql . " imagem='" . $nome_imagem . "',";
					$sql = $sql . " linkppc='" . $novo_nome . "'";
					$sql = $sql . " WHERE id = " . $id;
					//MOSTRA TUDO NA TELA echo "Instrução: " . $sql . "<br>";

					$resultado = mysqli_query($conexao, $sql);

					/*$deletar = "DELETE FROM cursos WHERE id = '$id'";
					$result_delete = mysqli_query($conexao, $deletar);
					if (!empty($imagem["name"])) {
						echo "aquii    ";
						// Pega extensão da imagem
						preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);
						// Gera um nome único para a imagem
						$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
							echo $nome_imagem . "aaaaaaaaaaaaaa";
						// Caminho de onde ficará a imagem
						$caminho_imagem = "images/" . $nome_imagem;
						// Faz o upload da imagem para seu respectivo caminho
						move_uploaded_file($imagem["tmp_name"], $caminho_imagem);
					}
					echo "Salvando: " .$id. ", " . $nome . ", " . $oferta . ", " . $modalidade . ", " . $habilitacao . ", " . $localizacao . ", " . $eixoTec . ", " 
					. $turno . ", " . $vagas . ", " . $periodo . ", " . $horas . ", " . $integralizacao . ", " . $integralizacaoMax . ", " 
					. $diretorEns . ", " . $coordenador . ", " . $justificativa . ", " . $objetivoG . ", " . $objetivoE . ", " . $competencias . ", " 
					. $atuacao . ", " . $matrizCurricular . ", " . $infraestrutura . ", " .$imagem."<br />";
					$sql = "INSERT INTO cursos (id,nome,oferta,modalidade,habilitacao,localizacao,eixoTec,
					turno,vagas,periodo,horas,integralizacao,integralizacaoMax,
					diretorEns,coordenador,justificativa,objetivoG,objetivoE,competencias,
					atuacao,matrizCurricular,infraestrutura,imagem) VALUES ";
					$sql = $sql . "('$id','$nome','$oferta','$modalidade','$habilitacao','$localizacao','$eixoTec',
					'$turno','$vagas','$periodo','$horas','$integralizacao','$integralizacaoMax',
					'$diretorEns','$coordenador','$justificativa','$objetivoG','$objetivoE','$competencias',
					'$atuacao','$matrizCurricular','$infraestrutura','$nome_imagem');";
					echo "Instrução: " . $sql . "<br>";
					$resultado = mysqli_query($conexao, $sql);*/


					//RESULTADO ZERO OU 1 echo "Resultado= " . $resultado . "<br>";
					if ($resultado == 1) {
            echo "<p align=\"center\" id=\"texto2\">Atualização do Curso " . $nome . " realizada com sucesso!</p>";
					} else {
            echo "<p align=\"center\" id=\"texto2\">Não foi possível realizar a atualização do Curso " 
            . $nome . "!</p>";
					}
					mysqli_close($conexao);
          echo "<p align=\"center\" id=\"botao_voltar\">
          <a style='font-size:16px; color: #008B8B' href=\"formulario.php\"><br><br><br><br> <b>VOLTAR</b></a></p>";
				}


				?>
      </div>
      <?php if ($tela <= 767) { ?>
            </div>
        </div>
      <?php } ?>
</body>
</html>
