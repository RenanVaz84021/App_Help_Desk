<?php

    session_start();

    // variavel verifica se autenticação foi realizada 
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

   /*  $perfis = array(1 => 'Administrativo', 2 => 'Usuario'); */

    // Usuarios do Sistema
    $usuarios_app = array(
        array('id' => 1, 'email' => 'renan_vaz1@hotmail.com', 'senha' => '123456', 'perfil_id' => 1),
        array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
        array('id' => 3, 'email' => 'jose@teste.com.br', 'senha' => '123456', 'perfil_id' => 2),
        array('id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '123456', 'perfil_id' => 2)
    );

    foreach($usuarios_app as $user) {
        /* print_r($user);
        echo '<hr/>'; */

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
    }

    if($usuario_autenticado) {
        echo 'Usuario Autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        
        header('Location: home.php');
        
    } else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro'); // redireciona para pagina de login
    }

    echo '<br/>';
    print_r($_POST);

?>