<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
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
    <link rel="stylesheet" href="cssjanela1.css" />
    <title>Seja bem-vindo!</title>
</head>

<body>

    <!-- CSS JANELA 1 -->
    <style>
        #header {
            -moz-transition: background 1s ease-in-out, height 0.2s ease-in-out;
            -webkit-transition: background 1s ease-in-out, height 0.2s ease-in-out;
            -ms-transition: background 1s ease-in-out, height 0.2s ease-in-out;
            transition: background 1s ease-in-out, height 0.2s ease-in-out;
            display: -moz-flex;
            display: -webkit-flex;
            display: -ms-flex;
            display: flex;
            -moz-justify-content: center;
            -webkit-justify-content: center;
            -ms-justify-content: center;
            justify-content: center;
            -moz-align-items: center;
            -webkit-align-items: center;
            -ms-align-items: center;
            align-items: center;
            display: -ms-flexbox;
            -ms-flex-align: center;
            -ms-flex-pack: center;
            background: rgba(254, 254, 254, 0.85);
            position: fixed;
            top: 0;
            width: 100%;
            height: 100vh;
            z-index: 10001;
        }

        /* JANELA 1 */
        #header .inner {
            -moz-transition: height 0.2s ease-in-out, width 0.2s ease-in-out;
            -webkit-transition: height 0.2s ease-in-out, width 0.2s ease-in-out;
            -ms-transition: height 0.2s ease-in-out, width 0.2s ease-in-out;
            transition: height 0.2s ease-in-out, width 0.2s ease-in-out;
            display: -moz-flex;
            display: -webkit-flex;
            display: -ms-flex;
            display: flex;
            background: #008B8B;
            -moz-flex-direction: column;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -moz-justify-content: center;
            -webkit-justify-content: center;
            -ms-justify-content: center;
            justify-content: center;
            -moz-align-items: center;
            -webkit-align-items: center;
            -ms-align-items: center;
            align-items: center;
            display: -ms-flexbox;
            -ms-flex-align: center;
            -ms-flex-pack: center;
            border-radius: 4px;
            width: 35em;
            height: 35em;
            padding: 4em;
            text-align: center;
            box-shadow: 0 0 0 1em #FFF;
            cursor: default;
            background: #008B8B;
        }

        #header .inner .content {
            -moz-transition: opacity 1s ease-in-out;
            -webkit-transition: opacity 1s ease-in-out;
            -ms-transition: opacity 1s ease-in-out;
            transition: opacity 1s ease-in-out;
            opacity: 1;

        }

        #header .inner .content h1 {
            font-size: 4em;
            font-family: "Work Sans", sans-serif;
            margin: 0 0 .25em 0;
            color: #fff;
        }

        #header .inner .content h2 {
            font-size: 1.5em;
            color: #fff;
            margin: 0 0 1em 0;
        }

        h2{
            margin: 100;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;

        }
        #header .inner .button {
				-moz-transition: background 1s ease-in-out;
				-webkit-transition: background 1s ease-in-out;
				-ms-transition: background 1s ease-in-out;
				transition: background 1s ease-in-out;
				margin: 0;
				border-radius: 30px;
            }
        
        @media screen and (max-width: 767px) {
            #botao {
                font-size: 20px;
                width: 260px;
            }
        }
    </style>

<?php ?>    

    <header id="header">
        <div class="inner">
            <div class="content">
                <img src="images/logo8.png" class="card-img" alt="" style="max-width:400px; max-height:500px;">
                <h2>Seja bem-vindo(a) a plataforma que irá
                    lhe auxiliar na escolha de um curso superior ou área de trabalho.</h2>
                <a onclick="javascript: location.href='index3.php';" class="button big alt" id="botao"><span>Para a página
                        inicial</span></a>
            </div>
            <!--<a onclick="javascript: location.href='../../index3.html';" class="button hidden"><span>Let's Go</span></a>
            -->
            </div>
    </header>
</body>

</html>
