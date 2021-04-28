<?php 

if(isset($_GET['usuario']) && $_GET['usuario'] != ''){
    $cadastro = [];

    $cadastro['usuario'] = $_GET['usuario'];

    if(isset($_GET['senha'])){
        $cadastro['senha'] = $_GET['senha'];
    }

    if(isset($_GET['administrador'])){
        $cadastro['administrador'] = $_GET['administrador'];
    }else{
        $cadastro['administrador'] = 'não';
    }
}

    include "conexao.php";
    if(isset($cadastro)){
        $sqlInserir = "INSERT INTO tb_usuarios(
            usuario,
            senha,
            administrador
        ) VALUES(
            '{$cadastro['usuario']}',
            '{$cadastro['senha']}',
            '{$cadastro['administrador']}'  
        );";

        mysqli_query($conexao, $sqlInserir);

    }

include "template.php";
?>