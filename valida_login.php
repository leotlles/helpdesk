<?php

//variavel que verifica se a autenticação foi realizada
    $usuario_autenticado = false;


// usuários
    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => 'abcd'),

    );
/*
    echo '<pre>';
    print_r($usuarios_app);
    echo '</pre>';
*/

    foreach($usuarios_app as $user) {
        
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado) {
        echo 'Usuário autenticado';
    } else {
        header('Location: index.php?login=error');
    }


/*
    print_r($_GET);

    echo '<br />';

    echo $_GET['email'];
    echo '<br />';
    echo $_GET['senha'];
USING GET METHOD
*/
?>