<?php

@session_start();

if(isset($_GET['heigthJanela'])) {
    $_SESSION['screenInfo'] = [
        'heigthJanela' => $_GET['heigthJanela'],
        'widthJanela' => $_GET['widthJanela'],
        'heightTela' => $_GET['heightTela'],
        'widthTela' => $_GET['widthTela']
    ];
    echo '<script>
                window.history.go(-1);
            </script>';
    die;
} else {
    if(!isset($_SESSION['screenInfo'])) {
        echo '<script>
                window.location.href = "detectScreen.php?heigthJanela="+window.innerHeight+"&widthJanela="+window.innerWidth+"&heightTela="+screen.height+"&widthTela="+screen.width;
            </script>';
        die;
    }   
}
?>