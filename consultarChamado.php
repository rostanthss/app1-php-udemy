<?php
    require_once('validador_acesso.php');

    $arquivo = fopen('chamados.txt','r');


    $registros = [];

    while(!feof($arquivo)){
        $registro = fgets($arquivo);
        $registros[] = $registro;
    }

    fclose($arquivo);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Chamado Help - Desk</title>
    <link rel="stylesheet" href="style6.css">
</head>
<body>
    
    <header id="logo">
        <img src="logo.png"  id="imgLogo" alt="">
        <span id="titulo">App Help Desk</span>
    </header>

    <div id="consultaChamado">
        <h2>Consulta de chamado</h2>

        <?php
        

            
            foreach($registros as $elemento){
                $registros_dados = explode('#',$elemento);   

                if($_SESSION['perfil_id'] === 2){
                    if($_SESSION['id'] != $registros_dados[0]){
                        continue;
                        }
                }

                
                if(count($registros_dados) < 3){
                    continue;
                }
        ?>
        <div class="chamado">
            <h3><?= $registros_dados[1]?></h3>
            <p><?= $registros_dados[2]?></p>
            <p><?= $registros_dados[3]?></p>
        </div>
        <?php }?>
        <br><br><br>
        <a href="home.php"><div id="btnConsulta" class="botaoChamado">Voltar</div></a>
    </div>  

    
    
</body>
</html>