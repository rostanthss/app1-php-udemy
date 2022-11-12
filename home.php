<?php
    require_once('validador_acesso.php')
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home Help - Desk</title>
    <link rel="stylesheet" href="style6.css">
</head>
<body>
    
    <header id="logo">
        <img src="logo.png"  id="imgLogo" alt="">
        <span id="titulo">App Help Desk</span>
        <a href="logoff.php"><span id="logoff">Sair</span></a>
    </header>
    
    <div id="menu">
        <h2>Menu</h2>

        <div class="opcoes">
            <abbr title="Clique para abrir um chamado"><a href="abrirChamado.php"><img src="formulario_abrir_chamado.png" class="imagemHome" alt=""></a></abbr>
        </div>
           
        <div class="opcoes">
            <abbr title="Clique para consultar os chamados abertos"><a href="consultarChamado.php"><img src="formulario_consultar_chamado.png" class="imagemHome" alt=""></a></abbr>
        </div>
    </div>

    
</body>
</html>