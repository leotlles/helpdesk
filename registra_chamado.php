<?php

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    $titulo = str_replace('#', '-', $_POST['título']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descrição']);

    $texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    //implode('#', $_POST); // fazer esse exercício dps

    //abrindo o arquivo
    $arquivo = fopen('arquivo.hd', 'a');

    //escrevendo o texto
    fwrite($arquivo, $texto);

    //fechando o arquivo
    fclose($arquivo);

    header('Location: abrir_chamado.php')

?>