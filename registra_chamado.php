<?php

    $titulo = str_replace('#', '-', $_POST['título']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descrição']);

    $texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    // Abrindo o arquivo
    $arquivo = fopen('arquivo.hd', 'a');

    // escrevendo no arquivo
    fwrite($arquivo, $texto);

    // fechando o arquivo
    fclose($arquivo);

    // redirecionando para outra página
    header('Location: abrir_chamado.php');

?>