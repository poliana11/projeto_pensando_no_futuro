<?php
$nome = $_POST['nome'];
//echo "aaaaaaaaaaaaaaaa" . $nome;

include('crudAdm/crudCursos/conexaoBD.php');
$select = "SELECT id FROM cursos WHERE nome = '$nome'";
$result_select = mysqli_fetch_assoc(mysqli_query($conexao, $select));
$id = $result_select['id'];

$oferta = "";
$modalidade = "";
$habilitacao = "";
$localizacao = "";
$eixoTec = "";
$turno = "";
$vagas = "";
$periodo = "";
$horas = "";
$integralizacao = "";
$integralizacaoMax = "";
$diretorEns = "";
$coordenador = "";
$justificativa = "";
$objetivoG = "";
$objetivoE = "";
$competencias = "";
$atuacao = "";
$matrizCurricular = "";
$infraestrutura = "";
$imagem = "";
$linkppc = "";

if ($id != 0) {
  $sql = "SELECT * FROM cursos WHERE id = " . $id;

  $resultado = mysqli_query($conexao, $sql);
  //$linhas = mysqli_num_rows($resultado);
  $row = mysqli_fetch_array($resultado);
  
  $nome = $row['nome'];
  $oferta = $row['oferta'];
  $modalidade = $row['modalidade'];
  $habilitacao = $row['habilitacao'];
  $localizacao = $row['localizacao'];
  $eixoTec = $row['eixoTec'];
  $turno = $row['turno'];
  $vagas = $row['vagas'];
  $periodo = $row['periodo'];
  $horas = $row['horas'];
  $integralizacao = $row['integralizacao'];
  $integralizacaoMax = $row['integralizacaoMax'];
  $diretorEns = $row['diretorEns'];
  $coordenador = $row['coordenador'];
  $justificativa = $row['justificativa'];
  $objetivoG = $row['objetivoG'];
  $objetivoE = $row['objetivoE'];
  $competencias = $row['competencias'];
  $atuacao = $row['atuacao'];
  $matrizCurricular = $row['matrizCurricular'];
  $infraestrutura = $row['infraestrutura'];
  $imagem = $row['imagem'];
  $linkppc = $row['linkppc'];
  mysqli_close($conexao); // fecha conexão
}
?>
<?php include __DIR__ . '/detectScreen.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Curso1</title>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body style="background-size: 100%; ">
  <div>
    <!--class="container"-->

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
        margin-top: 220px;
        font-size: 80px;
        color: #0B615E;
        text-align: center;
      }

      @media screen and (max-width: 767px) {
        #texto {
          /*color:#fff;
              margin: 0;
              position:relative;
              bottom:50px;
              left:10px;*/
          position: absolute;
          margin-top: 100px;
          font-size: 20px;
          color: #0B615E;
          text-align: center;
        }
      }

      #texto2 {
        position: absolute;
        margin-top: 400px;
        margin-left: 13em;
        font-size: 30px;
        color: #424242;
        text-align: center;
      }

      @media screen and (max-width: 767px) {
        #texto2 {
          position: absolute;
          margin-top: 180px;
          margin-left: 7em;
          font-size: 15px;
          color: #424242;
          text-align: center;
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
          margin-left: 1em;
          margin-right: 1em;
        }
      }

      @media screen and (min-width: 1200px) {
        #margem_lateral {
          margin-left: 3em;
          margin-right: 3em;
        }
      }

      @media screen and (max-width: 767px) {
        #logo {
          margin-top: -50px;
          height: 50px !important;
          width: 70px !important;
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
        #texto_lateral {
          margin-left: 0em; 
          margin-top: 1.5em;
        }
      }

      @media screen and (min-width: 1200px) {
        #texto_lateral {
          margin-left: 7em; 
        }
      }

      @media screen and (max-width: 767px) {
        #img_matrizcurricular {
          max-width:300px; 
        }
      }
      @media screen and (min-width: 1200px) {
        #img_matrizcurricular {
          max-width:500px; 
          max-height:500px;
        }
      }
    </style>

  <img src="images/logo8.png" id="logo" class="mg-fluid rounded float-right" style="position:absolute; top:110px;  max-height: 160px; max-width: 200px; right: 20px;" />
  <div id="texto"><b><?php echo $nome; ?></b></div>
  <!--<div id="texto2"></div>-->

  <?php $tela= $_SESSION['screenInfo']['widthTela']; 
        //$tela = 500; ?>
            
    <?php if ($tela <= 767) { ?>
      <nav class="navbar navbar-expand-md navbar-light " style="background-color: #008B8B; ">
        <!--<a href="#" class="navbar-brand" style="color: white;">Menu</a>-->
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" style="color: white; border-color: white;">
          <span class="navbar-toggler-icon" style="color: white; border-color: white;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse" style="background-color: #008B8B;">
          <div class="navbar-nav">
            <a href="index3.php" class="nav-item nav-link" style="color: white;">Pagina inicial</a>
            <a href="instituicao.php" class="nav-item nav-link" style="color: white;">Instituição</a>
            <a href="http://localhost/flarum/public/" class="nav-item nav-link" style="color: white;">Fórum</a>
            <a href="cursos.php" class="nav-item nav-link" style="color: white;">Cursos</a>
          </div>
          <div class="navbar-nav ml-auto">
            <li class="nav-item dropdown" >
              <a class="nav-link dropdown-toggle" style="color: white;" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Avançado</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="administrador.php" style="color: #008B8B;"><b>Administrador</b></a>
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
              <a class="nav-link" href="index3.php" style="font-size: 20px; color: white; height: 60px; border-color: #008B8B; background-color: #008B8B;">Pagina inicial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="instituicao.php" style="height: 60px; font-size: 20px; color: white;">Instituição</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/flarum/public/" style="height: 60px; font-size: 20px; color: white;">Fórum</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cursos.php" style="height: 60px; font-size: 20px; color: white;">Cursos</a>
            </li>
            <div class="navbar-nav ml-auto">
              <li class="nav-item">
                <nav class="navbar-dark" style="margin-top: -3em; margin-left: 58em; margin-right: 2em;">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #008B8B; ">
                    <span class="navbar-toggler-icon" style="background-color: #008B8B;"></span>
                  </button>
                  <div class="collapse" id="navbarToggleExternalContent">
                    <div class="bg p-4" style="background-color: #008B8B; margin-left: -10em; margin-top: -2.5em; width: 217px;">
                      <a class="link" href="administrador.php" style="color: white; font-size: 20px;">Administrador</a>
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



  <div class="card mb-3" style="background-color: white;  border-color: teal; margin-top: 3em;" id="margem_lateral">
    <img src="images/17.jpg" class="card-img-top" alt="..." >
    <div class="card-body" id="texto4">
      <h5 class="card-title" style="color: teal;"><?php echo $nome;?></h5></br>
      <p class="card-text" style="text-align: justify; font-size: 18px"><b>Informações básicas sobre o curso:</b></p>
      <div class="form-row">
        <div>
          <?php
            echo "<b>Oferta:</b> " . $oferta . "<br /><br />";
            echo "<b>Modalidade:</b> " . $modalidade . "<br /><br />";
            echo "<b>Habilitação:</b> " . $habilitacao . "<br /><br />";
            echo "<b>Eixo Tecnologico - MEC:</b> " . $eixoTec . "<br /><br />";
            echo "<b>Turno:</b> " . $turno . "<br />";
            //echo "<img src='images/" . $imagem . "' alt='Foto de exibição' /><br />";
            //echo "<img src = '.../" . $imagem . "' alt='Foto de exibição' />";
            //echo "<img src=" . $imagem . ">";
            // MOSTRAR IMAGEM!!!!!!! echo "<img src='crudAdm/crudCursos/images/" . $imagem . "' alt='Foto de exibição' /><br />";
          ?>
        </div>
        <div id="texto_lateral">
          <?php
            echo "<b>Número de vagas:</b> " . $vagas . "<br /><br />";
            echo "<b>Período:</b> " . $periodo . "<br /><br />";
            echo "<b>Carga horária total:</b> " . $horas . "<br /><br />";
            echo "<b>Tempo de integralização:</b> " . $integralizacao . "<br /><br />";
            echo "<b>Tempo máximo de integralização:</b> " . $integralizacaoMax . "<br />";
            // MOSTAR IMAGEM!!!!!!! echo "<img src='crudAdm/crudCursos/images/" . $imagem . "' alt='Foto de exibição' /><br />";
          ?>
        </div>
      </div>
      <!--<br color:="" rgb(0,="" 102,="" 255);"="">  Este será o link que apontará para o nosso script PHP.
      <br color:="" rgb(0,="" 102,="" 255);"="">  Use no href "baixar.php?arquivo=" + caminho de seu arquivo;
      <br color:="" rgb(0,="" 102, ="" 255);"="">  No Exemplo abaixo utilizei uma imagem com o nome "imagem.jpg" 
      que esta dentro da pasta "arquivos".<br color:="" rgb(0,="" 102,="" 255);"="">-->
      <!--PARA BAIXAR DIRETO O ARQUIVO!!!!!!<br color:="" rgb(0,="" 102,="" 255);"=""><a href="baixar.php?arquivo=images/ppc.pdf">Baixar Arquivo</a>-->
      
      <!--LINK PDF <a href="crudAdm/crudCursos/images/<?php //echo($linkppc) ?>" style="color: teal;">Projeto Pedagógico do Curso - arquivo completo</a><br />
      -->
      <p class="card-text"><small class="text-muted"></br></br>Informações atualizadas </small></p>
    </div>
  </div>

  
  <div class="card-columns" style="background-color: white; height: 750px; border-color: teal; margin-top: 3em;" id="margem_lateral">
    <div class="card"style="border-color: teal; height: 440px;">
      <img src="images/11.JPG" class="card-img-top" alt="...">
      <a class="card-text"><small class="text-muted"></br>&nbsp&nbsp Foto - Assessoria de Comunicação do IFRS Campus Farroupilha </small></a>
      <div class="card-body">
        <h5 class="card-title">Local de oferta</h5>
        <p class="card-text"><?php echo  $localizacao ?></p>
      </div>
    </div>
    <div class="card p-3" style="border-color: teal;" >
      <blockquote class="blockquote mb-0 card-body" style="height: 245px; border-color: teal;">
        <p style="font-size: 17px;"><b>Objetivo Geral: </b><?php echo $objetivoG; ?></p>
        <footer class="blockquote-footer">
          <small class="text-muted">
            Objetivos específicos abaixo.
          </small>
        </footer>
      </blockquote>
    </div>
    <div class="card" style="border-color: teal; height: 520px;">
      <img src="images/20.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"> </h5>
        <p class="card-text" style="font-size: 17px;">No projeto pedagógico do curso, encontram-se mais informações
      e detalhes sobre o curso. </p> <p class="card-text" style="font-size: 17px;">Documento disponivel abaixo.</p> 
        <p class="card-text"><small class="text-muted">Documento atualizado.</small></p>
      </div>
    </div>
    <div class="card text-white text-center p-3" style="border-color: teal; background-color: teal; height: 200px;">
      <blockquote class="blockquote mb-0" style="border-color: teal; background-color: teal; ">
      <p><a href="crudAdm/crudCursos/images/<?php echo($linkppc) ?>" 
        style="color: white;"></br>Projeto Pedagógico do Curso -<br /> arquivo completo</a><br /></p>
        <footer class="blockquote-footer text-white">
          <small>
            pdf do PPC para download <cite title="Source Title"></cite>
          </small>
        </footer>
      </blockquote>
    </div>
    <div class="card" style="border-color: teal;">
      <img src="images/19.jpg" class="card-img-top" alt="...">
      <a class="card-text"><small class="text-muted"></br>&nbsp&nbsp Foto - Assessoria de Comunicação do IFRS Campus Farroupilha </small></a>
    </div>
    <div class="card p-3 text-right" style="height: 425px; border-color: teal;">
      <blockquote class="blockquote mb-0" style="border-color: teal;">
      <h5 class="card-title"><b>Contatos:  </b></h5>
        <p style="font-size: 17px;"><?php echo "<b>Diretor de Ensino:</b> " . (nl2br($diretorEns)) . "<br />";?></p>
        <p style="font-size: 17px;"><?php echo "<b>Coordenador do Curso:</b> " . (nl2br($coordenador)) . "<br />";?></p>
        <footer class="blockquote-footer">
          <small class="text-muted">
            Entre em contato caso tenha dúvidas <cite title="Source Title"></cite>
          </small>
        </footer>
      </blockquote>
    </div>
    
</div>


  <?php if ($tela <= 767) { ?>
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
  <?php } ?> 
  <div class="card mb-3" style="background-color: white; border-color: teal; margin-top: 1em;" id="margem_lateral">
    <div class="card-body">
      <h5 class="card-title">Justificativa</h5></br>
      <p class="card-text" style="text-align: justify;"><?php echo(nl2br($justificativa));?></p></br>
    </div>
  </div>
  <div class="card mb-3" style="background-color: white; border-color: teal; margin-top: 1em;" id="margem_lateral">
    <div class="card-body">
      <h5 class="card-title">Objetivos Específicos:</h5></br>
      <p class="card-text" style="text-align: justify;"><?php echo(nl2br($objetivoE));?></p></br>
      <p class="card-text"><small class="text-muted">Atualizados</small></p>
    </div>
  </div>
  <div class="card mb-3" style="background-color: white; border-color: teal; margin-top: 1em;" id="margem_lateral">
    <div class="card-body">
      <h5 class="card-title">Competências:</h5></br>
      <p class="card-text" style="text-align: justify;"><?php echo(nl2br($competencias));?></p></br>
      <p class="card-text"><small class="text-muted">Atualizados</small></p>
    </div>
  </div>
  <div class="card mb-3" style="background-color: white; border-color: teal; margin-top: 1em;" id="margem_lateral">
    <div class="card-body">
      <h5 class="card-title">Área de atuação:</h5></br>
      <p class="card-text" style="text-align: justify;"><?php echo(nl2br($atuacao));?></p></br>
      <p class="card-text"><small class="text-muted">Atualizados</small></p>
    </div>
  </div>
  <div class="card mb-3" style="background-color: white; border-color: teal; margin-top: 1em;" id="margem_lateral">
    <div class="card-body">
      <h5 class="card-title">Matriz Curricular:</h5></br>
      <?php echo "<img src='crudAdm/crudCursos/images/".$matrizCurricular."' alt='Foto de exibição' id='img_matrizcurricular' /><br />";?>
      <!--<p class="card-text" style="text-align: justify;"><?php //echo(nl2br($matrizCurricular));?></p></br>
      -->
      <p class="card-text"><small class="text-muted">Atualizados</small></p>
    </div>
  </div>
  <div class="card mb-3" style="background-color: white;  border-color: teal; margin-top: 1em;" id="margem_lateral">
    <div class="card-body">
      <h5 class="card-title">Infraestrutura:</h5></br>
      <p class="card-text" style="text-align: justify;"><?php echo(nl2br($infraestrutura));?></p></br>
      <p class="card-text"><small class="text-muted">Atualizados</small></p>
    </div>
  </div>

  
  <br /><br /><br />
  <a onclick="javascript: location.href='index3.php';" class="button diferente" style="margin-left: 2em;"><span>Página inicial</span></a>

    <footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
          <img src="images/logo8.png" style="position:absolute; max-height: 160px; max-width: 200px;" />
          <small class="d-block mb-3 text-muted" style="position:absolute; left: 20em;">&copy; 2020</small>
        </div>
        <?php if ($tela <= 767) { ?>
          <br /><br /><br /><br /><br /><br /><br /><br /><br />
        <?php } ?>
        <div class="col-6 col-md">
          <h5>Sites uteis</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="https://ifrs.edu.br/farroupilha/">IFRS Campus Farroupilha</a></li>
            <li><a class="text-muted" href="https://ifrs.edu.br/">IFRS</a></li>
          
          </ul>
        </div>
    </footer>

</body>

</html>
