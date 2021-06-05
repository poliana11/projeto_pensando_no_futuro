<?php include __DIR__ . '/detectScreen.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Instituição</title>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
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
        /*display: block;*/
        position: absolute;
        margin-top: 100px;
        margin-right: 1em;
        margin-left: 5em;
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
          margin-right: 1em;
          margin-left: 1.2em;
          font-size: 40px;
          color: #0B615E;
          text-align: center;
        }
      }

      #texto2 {
        position: absolute;
        margin-top: 300px;
        margin-left: 12em;
        font-size: 30px;
        color: #424242;
        text-align: center;
      }

      @media screen and (max-width: 767px) {
        #texto2 {
          position: absolute;
          margin-top: 170px;
          margin-left: 2em;
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
          height: 60px !important;
          width: 80px !important;
          margin-top: -50px;
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
        #admlogin {
          text-align: center; 
          color: #424242;
          margin: 0 auto;
			    width: 50%;
        }
      }
      @media screen and (min-width: 1200px) {
        #admlogin {
          position: absolute; 
          margin-top: -20em;  
          text-align: center; 
          color: #424242;
          margin-left: 29em;
        }
      }
    </style>
   
   <?php $tela= $_SESSION['screenInfo']['heightTela']; 
         //$tela = 500; ?>

  <img src="images/logo8.png" id="logo" class="mg-fluid rounded float-right" style="position:absolute; top:110px;  max-height: 160px; max-width: 200px; right: 20px;" />
  <div id="texto"><b>Administração</b></div>
  <div id="texto2">Faça login para realizar mudanças na plataforma</div>   

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

    <!--LOGIN ADMINISTRADOR-->
  <?php if ($tela <= 767) { ?>
      <br/><br/>
  <?php } ?>
  <div class="container">
    <form method="post" action="login.php">
      <div id="admlogin">
        <div class="form-group">
          <label for="exampleInputEmail1"><b>Usuário</b></label>
          <!--<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color: rgba(23, 199, 230, 0.123); border-color: #008B8B;">-->
          <!--<input type="text" name="usuario" id="id_usuario" size = "10" maxlength = "10" placeholder="Seu usuario" autofocus required /><br />-->
          <input type="text" name="usuario" id="id_usuario" class="form-control" aria-describedby="emailHelp" style="background-color: rgba(23, 199, 230, 0.123); border-color: #008B8B;" autofocus required />
          <!--CAIXA D TEXTO<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1"><b>Senha</b></label>
          <input type="password" class="form-control" name="senha" id="id_senha" style="background-color: rgba(23, 199, 230, 0.123); border-color: #008B8B;">
        </div>
        <button type="submit" value="Enviar" name="enviar" class="btn btn-primary" style="border-color: #008B8B; background-color: #008B8B; font-size: 15px; width: 80px; height: 40px;">Enviar</button>
        <!--<br/><br/><a onclick="javascript: location.href='crudAdm/incluir.php';" class="button diferente" style="margin: 0 auto; width: 50%;"><span>Criar usuário</span></a>
            -->
      </form>
      </div>
    </div>

		<!--	<p align="center">
			<label>Usuário</label>
			<input type="text" name="usuario" id="id_usuario" size = "10" maxlength = "10" placeholder="Seu usuario" autofocus required /><br />
			<br />
			<p align="center">
			<label>Senha</label>
			<input type="password" name="senha" id="id_senha" size = "10" maxlength = "10" placeholder="Sua senha"/><br />
			<br />
			<p align="center">
			<input type="submit" value="Enviar" name="enviar" value="Enviar"/>
		</form>	-->
    <!--LOGIN ADMINISTRADOR-->
    

    <br/><br/><br/>
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