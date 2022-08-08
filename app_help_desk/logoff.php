<?php
    session_start();

    /* echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    
    // remover indices do array de sessão

    unset($_SESSION['x']);

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>'; */

    // destroi todas as variaveis de sessão e redireciona para a pagina de login
    session_destroy();
    header('Location: index.php');

?>