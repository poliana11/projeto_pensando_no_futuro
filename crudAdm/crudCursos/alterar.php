<?php
$nome = $_POST['nome'];

include('conexaoBD.php');
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

  //Popular as variáveis, colocar dados nas variaveis;
  //$codigo = $row['codigo'];
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
else{
    header("location: cursonaoexiste.php");
}

include __DIR__ . '/../../detectScreen.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Alterar dados curso</title>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
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
        margin-top: -50px;
        font-size: 80px;
        color: #0B615E;
        text-align: center;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%)
    }

    @media screen and (max-width: 767px) {
        #texto {
            position: absolute;
            margin-top: -150px;
            font-size: 40px;
            color: #0B615E;
            text-align: center;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%)
        }
    }

    #texto2 {
        position: absolute;
        margin-top: 80px;
        font-size: 30px;
        color: #424242;
        text-align: center;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%)
    }

    @media screen and (max-width: 767px) {
        #texto2 {
            position: absolute;
            margin-top: -380px;
            font-size: 15px;
            color: #424242;
            text-align: center;
            margin-right: 0.5px;
            margin-left: 0.5px;
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
        #moldura {
            background-color: white;
            height: 4000px;
            border-color: teal;
            margin-top: 3em;
        }
    }

    @media screen and (min-width: 1200px) {
        #moldura {
            background-color: white;
            height: 3000px;
            border-color: teal;
            margin-top: 3em;
        }
    }

    @media screen and (max-width: 767px) {
        #botao_salvar {
            border-color: #008B8B;
            background-color: #008B8B;
            font-size: 15px;
            width: 80px;
            height: 40px;
        }
    }

    @media screen and (min-width: 1200px) {
        #botao_salvar {
            border-color: #008B8B;
            background-color: #008B8B;
            font-size: 15px;
            width: 80px;
            height: 40px;
            margin-left: 60em;
        }
    }

    @media screen and (max-width: 767px) {
        #margem {
            margin-right: 10px;
        }
    }

    @media screen and (min-width: 1200px) {
        #margem {
            margin-left: 20px;
        }
    }

    @media screen and (max-width: 767px) {
        #texto3 {
            position: absolute;
            font-size: 15px;
            color: teal;
            text-align: center;
            margin-right: 0.5px;
            margin-left: 0.5px;
        }
    }

    @media screen and (min-width: 1200px) {
        #texto3 {
            position: absolute;
            font-size: 20px;
            color: teal;
            text-align: center;
        }
    }
    @media screen and (max-width: 767px) {
        #botao_voltar { 
          font-size: 15px; 
          width: 80px; 
          height: 40px;  
          margin-top: 1em;
        }
      }

      @media screen and (min-width: 1200px) {
        #botao_voltar {
          font-size: 15px; 
          width: 80px; 
          height: 40px;  
          margin-left: 61em; 
        }
      }
    </style>

    <img src="images/logo8.png" id="logo" class="mg-fluid rounded float-right"
        style="position:absolute; top:50px;  max-height: 160px; max-width: 200px; right: 20px;" />
    <div id="texto"><b>Alterar dados curso</b></div>
    <div id="texto2"></div>

    <?php $tela= $_SESSION['screenInfo']['widthTela']; 
    	  //$tela = 500; ?>

    <?php if ($tela <= 767) { ?>
    <nav class="navbar navbar-expand-md navbar-light " style="background-color: #008B8B; ">
        <!--<a href="#" class="navbar-brand" style="color: white;">Menu</a>-->
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"
            style="color: white; border-color: white;">
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: white;" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="true" aria-expanded="false">Avançado</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="../../administrador.php"
                            style="color: #008B8B;"><b>Administrador</b></a>
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
            <ul class="nav nav-tabs"
                style="position: absolute; border-color: #008B8B; height: 60px; max-width: 100%; margin-left: -119px; float: left;">
                <li class="nav-item" style="border-color: #008B8B; height: 60px;">
                    <a class="nav-link" href="../../index3.php"
                        style="font-size: 20px; color: white; height: 60px; border-color: #008B8B; background-color: #008B8B;">Pagina
                        inicial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../instituicao.php"
                        style="height: 60px; font-size: 20px; color: white;">Instituição</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://forum-pensando-no-futuro.herokuapp.com/public/"
                        style="height: 60px; font-size: 20px; color: white;">Fórum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../cursos.php"
                        style="height: 60px; font-size: 20px; color: white;">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../logout.php"
                        style="height: 60px; font-size: 20px; color: white;">Logout</a>
                </li>
                <div class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <nav class="navbar-dark" style="margin-top: -3em; margin-left: 58em; margin-right: 2em;">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                                aria-expanded="false" aria-label="Toggle navigation"
                                style="background-color: #008B8B; ">
                                <span class="navbar-toggler-icon" style="background-color: #008B8B;"></span>
                            </button>
                            <div class="collapse" id="navbarToggleExternalContent">
                                <div class="bg p-4"
                                    style="background-color: #008B8B; margin-left: -10em; margin-top: -2.5em; width: 217px;">
                                    <a class="link" href="../../administrador.php"
                                        style="color: white; font-size: 20px;">Administrador</a>
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
        <form id="formulario" method="post" action="actions1.php" name="formulario" enctype="multipart/form-data">
            <div class="card mb-3" id="moldura">
                <div class="card-body">
                    <div id="texto3"> Complete todos os campos</br></div>
                    <div style="position: absolute; color: #424242; justify-content: center;" id="margem">
                        <input type="hidden" id="id_acao" name="acao" /> <!-- Controle "Escondido" -->
                        <input type="hidden" id="id_identificacao" name="identificacao" value="<?php echo $id; ?>" />
                        <!-- Controle "Escondido" -->

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label><b></br></br>Nome:</b></label>
                                <input type="text" name="nome" id="id_nome" class="form-control"
                                    style="border-color: #008B8B; " required value="<?php echo $nome; ?>" /><br />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label><b>Forma de oferta:</b></label>
                                <input type="text" name="oferta" id="id_oferta" class="form-control"
                                    style="border-color: #008B8B;" required value="<?php echo $oferta; ?>" /><br />
                            </div>
                            <div class="form-group col-md-4">
                                <label><b>Modalidade (presencial ou à distância):</b></label>
                                <input type="text" name="modalidade" id="id_modalidade" class="form-control"
                                    style="border-color: #008B8B;" required value="<?php echo $modalidade; ?>" /><br />
                            </div>
                            <div class="form-group col-md-4">
                                <label><b>Habilitação:</b></label>
                                <input type="text" name="habilitacao" id="id_habilitacao" class="form-control"
                                    style="border-color: #008B8B;" required value="<?php echo $habilitacao; ?>" /><br />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label><b>Local da oferta:</b></label>
                                <input type="text" name="localizacao" id="id_local" class="form-control"
                                    style="border-color: #008B8B;" required value="<?php echo $localizacao; ?>" /><br />
                            </div>
                            <div class="form-group col-md-6">
                                <label><b>Eixo tecnológico:</b></label>
                                <input type="text" name="eixoTec" id="id_eixoTec" class="form-control"
                                    style="border-color: #008B8B;" required value="<?php echo $eixoTec; ?>" /><br />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label><b>Turno:</b></label>
                                <input type="text" name="turno" id="id_turno" class="form-control"
                                    style="border-color: #008B8B;" required value="<?php echo $turno; ?>" /><br />
                            </div>
                            <div class="form-group col-md-4">
                                <label><b>Número de vagas:</b></label>
                                <input type="text" name="vagas" id="id_vagas" class="form-control"
                                    style="border-color: #008B8B;" required value="<?php echo $vagas; ?>" /><br />
                            </div>
                            <div class="form-group col-md-4">
                                <label><b>Período:</b></label>
                                <input type="text" name="periodo" id="id_periodo" class="form-control"
                                    style="border-color: #008B8B;" required value="<?php echo $periodo; ?>" /><br />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label><b>Carga horária total:</b></label>
                                <input type="text" name="horas" id="id_horas" class="form-control"
                                    style="border-color: #008B8B;" required value="<?php echo $horas; ?>" /><br />
                            </div>
                            <div class="form-group col-md-4">
                                <label><b>Tempo de integralização:</b></label>
                                <input type="text" name="integralizacao" id="id_lintegralizacao" class="form-control"
                                    style="border-color: #008B8B;" required
                                    value="<?php echo $integralizacao; ?>" /><br />
                            </div>
                            <div class="form-group col-md-4">
                                <label><b>Tempo máximo de integralização:</b></label>
                                <input type="text" name="integralizacaoMax" id="id_integralizacaoMax"
                                    class="form-control" style="border-color: #008B8B;" required
                                    value="<?php echo $integralizacaoMax; ?>" /><br />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label><b>Contato da Direção de Ensino:</b></label>
                                <input type="text" name="diretorEns" id="id_diretorEns" class="form-control"
                                    style="border-color: #008B8B;" required value="<?php echo $diretorEns; ?>" /><br />
                            </div>
                            <div class="form-group col-md-6">
                                <label><b>Contato da coordenação do curso:</b></label>
                                <input type="text" name="coordenador" id="id_coordenador" class="form-control"
                                    style="border-color: #008B8B;" required value="<?php echo $coordenador; ?>" /><br />
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label><b>Justificativa:</b></label>
                                <textarea type="text" name="justificativa" id="id_justificativa" class="form-control"
                                    style="border-color: #008B8B;" rows="10" required
                                    value="<?php echo $justificativa; ?>"></textarea>
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label><b>Objetivo Geral:</b></label>
                                <textarea type="text" name="objetivoG" id="id_objetivoG" class="form-control"
                                    style="border-color: #008B8B;" rows="10" required
                                    value="<?php echo $objetivoG; ?>"></textarea>
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label><b>Objetivo Específico:</b></label>
                                <textarea type="text" name="objetivoE" id="id_objetivoE" class="form-control"
                                    style="border-color: #008B8B;" rows="10" required
                                    value="<?php echo $objetivoE; ?>"></textarea><br />
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label><b>Competências:</b></label>
                                <textarea type="text" name="competencias" id="id_competencias" class="form-control"
                                    style="border-color: #008B8B;" rows="10" required
                                    value="<?php echo $competencias; ?>"></textarea><br />
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label><b>Área de atuação:</b></label>
                                <textarea type="text" name="atuacao" id="id_atuacao" class="form-control"
                                    style="border-color: #008B8B;" rows="10" required
                                    value="<?php echo $atuacao; ?>"></textarea><br />
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label><b>Infraestrutura:</b></label>
                                <textarea type="text" name="infraestrutura" id="id_infraestrutura" class="form-control"
                                    style="border-color: #008B8B;" rows="10" required
                                    value="<?php echo $infraestrutura; ?>"></textarea><br />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label><b>Matriz curricular (imagem da tabela):</b></label>
                                <input type="file" name="matrizCurricular" class="form-control-file"
                                    style="border-color: #008B8B; color:#008B8B ; font-size: 17px; " required
                                    value="<?php echo $matrizCurricular; ?>" /><br />
                            </div>
                            <div class="form-group col-md-6">
                                <label><b>Imagem para link do curso:</b></label>
                                <input type="file" name="imagem" class="form-control-file"
                                    style="border-color: #008B8B; color:#008B8B ; font-size: 17px; " required
                                    value="<?php echo $imagem; ?>" /><br /><br />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label><b>Arquivo PPC:</b></label>
                                <input type="file" name="linkppc" class="form-control-file"
                                    style="border-color: #008B8B; color:#008B8B ; font-size: 17px; " /><br /><br />
                            </div>
                        </div>

                        <input type="button" value="Salvar" class="btn btn-primary"
                            onclick="executaPost('formulario','salvar_alt');" id="botao_salvar" /> <br> <br />

                            <p id="botao_voltar"><a href="escolher.php">VOLTAR</a></p>
                        <!--
				<input type="button" value="Consultar"  class="botao" onclick="executaPost('formulario','consultar');"/>
        -->
                    </div>
                </div>
            </div>
        </form>
    </div>


</body>

</html>
