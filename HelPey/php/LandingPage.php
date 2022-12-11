<?php
    include("conexao.php");

    $firstname=$_POST['nome'];
    $lastname=$_POST['sobrenome'];
    $email=$_POST['email'];
    $number=$_POST['celular'];
    $password=$_POST['senha'];
    $confirmPassword=$_POST['confirmesuaSenha'];

    $sql="INSERT INTO cadastro(firstname, lastname, email, number, password, confirmPassword) 
            VALUES ('$firstname', '$lastname', '$email', '$number', '$password', '$confirmPassword')";

    if(mysqli_query($conexao, $sql)){
        echo "Usuário Cadastrado Com Sucesso";
        header("index.htm");
    }

    else{
        echo "Erro".mysqli_connect_error($conexao);
    }

    mysqli_close($conexao);
?>