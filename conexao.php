<?php

$servidor = '127.0.0.1';
$usuario = 'root';
$senha = '';
$banco = 'bd_cadastro';

$conexao =  mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conexao){
    die("<br><h3>Não conectou!</h3>" . mysqli_connect_error());
}

?>