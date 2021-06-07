<?php include __DIR__ . '/detectScreen.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/bootstrap/style.css">
    <!--<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->

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

    <title>Página Inicial</title>

</head>

<body>
    <!--style ="background-image:url('images/3.jpg'); background-repeat: no-repeat;" -->
    <style>
    h1 {
        /*titulo grande*/
        margin-top: 10em;
        margin-left: 2em;
        font-size: 100px;
        color: #008B8B;
    }

    p1 {
        font-size: 20px;
        margin-top: 10em;
        text-align: center;
    }
    
    @media screen and (max-width: 767px) {
        #texto {
            font-size: 20px;
            margin-top: 100px;
            text-align: center;
        }
    }
    
    @media screen and (min-width: 1200px) {
        #texto {
            font-size: 20px;
            margin-top: 250px;
            text-align: center;
        }
    }

    .fundo {
        background-image: url('images/3.jpg');
        background-repeat: no-repeat;
        left: 0;
        overflow: auto;
        padding: 3em;
        position: absolute;
        right: 0;
        text-align: center;
        top: 0;
        background-position: center;
        background-size: cover;
    }

    @media screen and (max-width: 767px) {
        #logo {
            position:absolute; 
            display: block; 
            height: 160px !important;
            width: 240px !important;
            text-align: center;
            top: 50%;
            left: 50%;
            margin-top: -200px;
            margin-left: -120px;
        }
    }
    
    @media screen and (min-width: 1200px) {
        #logo {
            position:absolute; 
            display: block; 
            height: 300px; 
            width: 400px;
            text-align: center;
            top: 50%;
            left: 50%;
            margin-top: -280px;
            margin-left: -200px;
        }
    }

    @media screen and (max-width: 767px) {
        #botao1 {
            margin-top: 1em;
        }
    }
    
    @media screen and (min-width: 1200px) {
        #botao1 {
            margin-top: 5px;
        }
    }
    @media screen and (max-width: 767px) {
        #botao {
            margin-top: 0em;
        }
    }
    
    @media screen and (min-width: 1200px) {
        #botao {
            margin-top: 5px;
        }
    }

    </style>

    <div class=fundo>

        <?php $tela= $_SESSION['screenInfo']['heightTela'];
                 echo "AQUI" . $tela;
              //$tela = 500; ?>

        <?php if ($tela >= 892) { ?>
        <nav class="navbar navbar-expand-md navbar-light " style="background-color: #008B8B; ">
            <!--<a href="#" class="navbar-brand" style="color: white;">Menu</a>-->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"
                style="color: white; border-color: white;">
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: white;" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="true" aria-expanded="false">Avançado</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="administrador.php"
                                style="color: #008B8B;"><b>Administrador</b></a>
                        </div>
                    </li>
                </div>
            </div>
        </nav>
        <?php } ?>

        <?php if ($tela > 767 && $tela < 892) { ?>
        <!--<div class="fixed-top ">-->
        <div class="container">
            <nav class="nav nav-expand-md flex-column">
                <ul class="nav nav-tabs"
                    style="position: absolute; border-color: #008B8B; height: 60px; max-width: 100%; margin-left: -119px; float: left; margin-top: -40px;">
                    <li class="nav-item" style="border-color: #008B8B; height: 60px;">
                        <a class="nav-link" href="index3.php"
                            style="font-size: 20px; color: white; height: 60px; border-color: #008B8B; background-color: #008B8B;">Pagina
                            inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="instituicao.php"
                            style="height: 60px; font-size: 20px; color: white;">Instituição</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/flarum/public/"
                            style="height: 60px; font-size: 20px; color: white;">Fórum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cursos.php"
                            style="height: 60px; font-size: 20px; color: white;">Cursos</a>
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

        <img src="images/logo8.png" id="logo" class="img-responsive"  />
        <br /><br /><br /><br /><br /><br />
        <p1><div id="texto">Plataforma de Informações Acadêmicas de Cursos Superiores do IFRS - Campus Farroupilha</div></p1><br /><br /><br />

        <a class="btn btn-info" href="http://localhost/flarum/public/" id="botao1"
            style="background-color: #008B8B;  margin-left: 0em; font-size: 25px; width: 200px; height: 60px;">Fórum</a>
        <a type="button" class="btn btn-outline" href="cursos.php" id="botao"
            style="border-color: #008B8B;  color: #008B8B; font-size: 25px; width: 200px; height: 60px;">Cursos</a>
           
        <br /><br /><br />
        <!-- barra menu com logo 
            <header class="masthead clearfix navbar navbar-dark bg-dark">
            <div class="logo col-xs-12 col-md-2">
                <img src="images/1.png" width="35%"/>
            </div>
    
            <div class="col-xs-12 col-md-8 inner">
                <div class="nav justify-content-center m-auto">
                    <h3 class="titulo"> ÁREA DE CADASTRO DE TIMES </h3>
                </div>
            </div>
        </header>-->
    </div>
</body>

</html>
