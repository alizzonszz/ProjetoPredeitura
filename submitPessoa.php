<?php

    include_once("config.php");
    
    $nome = $_REQUEST['nome'];
    $data_nascimento = $_REQUEST['data_nascimento'];
    $cpf = $_REQUEST['cpf'];
    $sexo = $_REQUEST['sexo'];
    $cidade = $_REQUEST['cidade'];
    $bairro = $_REQUEST['bairro'];
    $rua = $_REQUEST['rua'];
    $numero = $_REQUEST['numero'];
    $complemento = $_REQUEST['complemento'];

    $sql = "INSERT INTO pessoas(nome,data_nascimento,cpf,sexo,cidade,bairro,rua,numero,complemento) VALUES('$nome','$data_nascimento','$cpf','$sexo','$cidade','$bairro','$rua','$numero','$complemento')";

    if(mysqli_query($mysqli, $sql)){
        header("Location: pessoa.php");
    // echo '<script>alert("Pessoa cadastrado com sucesso")</script>';
        
    } else{
        echo "ERROR: $sql. " . mysqli_error($link);
    }
    
    mysqli_close($link);
?>