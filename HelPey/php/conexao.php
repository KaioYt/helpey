<?php
    error_reporting(0);
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $dbname="cadastro-test";

    $conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);
    if(!$conexao){
        die("ouve um erro".mysqli_connect_error());
    }
?>