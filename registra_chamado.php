<?php

    session_start();

    //tratando o texto
    $tituloF = str_replace('#','-',$_POST['tituloF']);
    $categoria = str_replace('#','-',$_POST['categoria']);
    $comentario = str_replace('#','-',$_POST['comentario']);

    //concatenando o texto
    $texto = $_SESSION['id']. '#'. $tituloF  . '#' . $categoria . '#' .$comentario . PHP_EOL;

    //abrindo o arquivo txt
    $arquivo = fopen('chamados.txt','a');

    //gravando o texto no arquivo
    fwrite($arquivo,$texto);

    //fechando o arquivo
    fclose($arquivo);

    header('Location: abrirChamado.php');




?>