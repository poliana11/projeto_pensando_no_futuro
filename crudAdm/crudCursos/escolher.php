<?php
include('conexaoBD.php');
include('../../actions/valida_cookies.inc');
//echo $_SESSION["nome_usuario"];

include __DIR__ . '/../../detectScreen.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Alterar dados curso</title>
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
			height: 400px; 
			border-color: teal; 
			margin-top: 3em;
        }
      }
      @media screen and (max-width: 767px) {
        #botoes {
            position: absolute;
            text-align: center; 
            color: #424242;
            top: 50%; left: 50%; margin-right: -50%; transform: translate(-50%, -50%)
        }
      }

      @media screen and (min-width: 1200px) {
        #botoes {
            position: absolute; 
            margin-top: 10em; 
            text-align: center; 
            color: #424242;
            top: 50%; left: 50%; margin-right: -50%; transform: translate(-50%, -50%)
        }
      }
      
    </style>
    
	<img src="images/logo8.png" id="logo" class="mg-fluid rounded float-right" style="position:absolute; top:50px;  max-height: 160px; max-width: 200px; right: 20px;" />
    <div id="texto"><b>Alterar dados curso</b></div>
    <div id="texto2"></div>  

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
        <div id="botoes">
        <form id="formulario" method="post" action="alterar.php" name="formulario"> 
            <input type="hidden" id="id_acao" name="acao"/> <!-- Controle "Escondido" -->
            
            <label><b>Nome (denominação):</b></label>
            <input type="text" name="nome" id="id_nome" class="form-control" autofocus required style="background-color: rgba(23, 199, 230, 0.123); border-color: #008B8B;"/><br /><br>

            <!-- <input type="hidden" id="id_identificacao" name="identificacao" value="  ?php echo $id;?>"/>  Controle "Escondido" -->
            
            <input type="submit" name="submit" value="Alterar" class="btn btn-primary" style="border-color: #008B8B; background-color: #008B8B; font-size: 15px; width: 80px; height: 40px;"/>
            <p ><a style='font-size:16px; color: #008B8B' align='center' href="formulario.php"></br><b>VOLTAR</b></a></p>
            <!--															
            <input type="button" value="Alterar" onclick="javascript: location.href='alterar.php?rowid=1';" />
            -->
            <!--
            <input type="button" value="Consultar"  class="botao" onclick="executaPost('formulario','consultar');"/>
            -->
        </form>  
        </div>
        <?php if ($tela <= 767) { ?>
           		</div>
        	</div>
        <?php } ?>     
	</div>
	
</body>
</html>
