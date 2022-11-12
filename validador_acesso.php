<?php

    session_start();
    if( !isset($_SESSION['autenticado']) or $_SESSION['autenticado'] != 'sim'){
        header('Location: index.php?loguin=erro2');
    }
?>