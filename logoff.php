<?php 
    session_start();

    echo "<pre />";
    print_r($_SESSION);
    //remover indices de array de sessão
    //unset()

    unset($_SESSION['x']); //para remover o indíce apenas se existir

    echo "<pre />";
    print_r($_SESSION);
    //destruir a variável de sessão
    //session_destroy()

    session_destroy(); //será destruída
    //forçar um redirecionamento 
    header("Location: index.php");
    echo "<pre />";
    print_r($_SESSION);
?>