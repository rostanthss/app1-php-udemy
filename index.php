<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> App Help - Desk</title>
    <link rel="stylesheet" href="style6.css">
</head>
<body>
    
    <header id="logo">
        <img src="logo.png"  id="imgLogo" alt="">
        <span id="titulo">App Help Desk</span>
    </header>

    <div id="areaLoguin">
        <h2>Loguin</h2>

        <div id="formulario">
            <form action="valida_loguin.php" method="post">

                <input type="email" name="email" id="email" placeholder="E-mail" class="dados"> <br>
                <input type="password" name="senha" id="senha" placeholder="Senha" class="dados"> <br>
                
                    <?php
                        if(isset($_GET['loguin'])  and $_GET['loguin'] == 'erro'){
                            
                        
                    ?>
                        <div id="teste">
                            Usuário ou senha inválidos 
                        </div>
                    <?php } ?>

                    <?php
                        if(isset($_GET['loguin'])  and $_GET['loguin'] == 'erro2'){
                            
                        
                    ?>
                        <div id="teste">
                            Faça loguin antes de acessar as páginas
                        </div>
                    <?php } ?>
                 <br>
                <input type="submit" value="Entrar" class="botao">
            </form>
        </div>
    </div>
</body>
</html>