<?php

    session_start();

    $usuario_id = null;
    $usuario_perfil_id = null;
    $autenticacao = false;

    $perfil = [1=>'administrativo',2=>'usuario'];
    $usuario_app = [
        ['id'=> 1,'email'=>'joao@123.com','senha'=>'12345','perfil_id'=>1],
        ['id'=> 2,'email'=>'maria@123.com','senha'=>'54321','perfil_id'=>1],
        ['id'=> 3,'email'=>'jose@123.com','senha'=>'56789','perfil_id'=>2],
        ['id'=> 4,'email'=>'marcia@123.com','senha'=>'98765','perfil_id'=>2]];

    foreach ($usuario_app as $loguin) {
        
        if($loguin['email'] === $_POST['email'] and $loguin['senha'] === $_POST['senha']){
            $autenticacao = true;
            $usuario_id = $loguin['id'];
            $usuario_perfil_id = $loguin['perfil_id'];
            break;
        } 

    }

    if($autenticacao == true){
        $_SESSION['autenticado'] = 'sim';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');
    } else {
       header('Location: index.php?loguin=erro');
       $_SESSION['autenticado'] = 'não';
    }


?>