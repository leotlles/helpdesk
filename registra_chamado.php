<?php

    session_start();

    // trabalhando na montagem do texto
    $titulo = str_replace('#', '-', $_POST['título']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descrição']);

    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    // abrindo o arquivo
    $arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');

    // escrevendo no arquivo
    fwrite($arquivo, $texto);

    // fechando o arquivo
    fclose($arquivo);

    // redirecionando para outra página
    header('Location: abrir_chamado.php');

?>