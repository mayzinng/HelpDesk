<?php 
// echo "<pre/>";
    // print_r($_POST);
    // echo "<br />";
    // $_POST['email'];
    // echo "<br />";
    // $_POST['senha'];
     // $users['email'];
    // echo "<br/>";
    // $users['senha'];
    // echo $_POST['email'];
    // echo "<br />";
    // echo $_POST['senha'];
    // echo "<br />";
    // print_r($_GET);
    // echo "<br />";
    // echo $_GET['email'];
    // echo "<br />";
    // echo $_GET['senha'];
    //Essa tag verifica se a autenticação foi realizado
    $usuario_autenticado = false;
    $usuarios = [
        ['email' => 'benj@gmail.com', 'senha' => '123123'],
        ['email' => 'benny@gmail.com', 'senha' => 'abcd'],
    ];


    foreach($usuarios as $user) { 

        if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']  ) {
            $usuario_autenticado = true;
        }
    }
       if($usuario_autenticado){
            header('Location: home.php');
            }
        else{
            header('Location: index.php?login=erro');
    }


?>