<?php
    //declara variaveis para base
    //e altura e pegar os valores
    $base = $_GET['base'];
    $altura = $_GET['altura'];
    //calcula a area
    $area = $base * $altura;
    //exibe a area do retangulo
    echo '<h1>Área: '.$area.'</h1>';
?>