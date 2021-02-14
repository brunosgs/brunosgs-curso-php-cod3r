<?php

// Cria uma novaconexao com o banco de dados
function novaConexao($banco = 'curso_php')
{
    $servidor = '127.0.0.1:3307';
    $usuario = 'root';
    $senha = 'udemy';

    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    if ($conexao->connect_error) {
        die('Erro: ' . $conexao->connect_error);
    }

    return $conexao;
}
