<?php
    require_once('validador_acesso.php')
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Abrir Chamado Help - Desk</title>
    <link rel="stylesheet" href="style6.css">
</head>
<body>
    
    <header id="logo">
        <img src="logo.png"  id="imgLogo" alt="">
        <span id="titulo">App Help Desk</span>
    </header>

    <div id="chamado">
        <h2>Abertura de chamado</h2>

        <form action="registra_chamado.php" method="post">
            <p>Título</p>
            <input type="text" name="tituloF" id="tituloF" class="dadosChamado" placeholder="Título"><br>
            <p>Categoria</p>
            <select name="categoria" id="categoria" class="dadosChamado" >
                <option value="" selected disabled ></option>
                <option value="coisa quebrada">coisa quebrada</option>
                <option value="trocar">trocar</option>
            </select>

            <p>Descrição</p>

            <textarea name="comentario" id="comentario" cols="30" rows="10" placeholder="Descreva o problema"></textarea>

            <a href="home.php"><div class="botaoChamado">Voltar</div></a> 
            <input type="submit" value="Cadastrar" class="botaoChamado" style="background: rgb(235, 180, 0);">
        </form>
    </div>
    
    
</body>
</html>