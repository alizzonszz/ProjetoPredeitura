<?php

    include_once("config.php");
    
    //$numero2 = $_REQUEST['numero2'];
    $descricao = $_REQUEST['descricao'];
    $data = $_REQUEST['data'];
    $prazo = $_REQUEST['prazo'];
    $contribuinte = $_REQUEST['contribuinte'];

    $sql = "INSERT INTO protocolo(descricao,data,prazo,contribuinte) VALUES('$descricao','$data''$prazo',$contribuinte)";

    if(mysqli_query($mysqli, $sql)){
        //echo '<script>alert("Protocolo cadastrado com sucesso")</script>';
        header("Location: protocolo.php");
    }
    else
    {
        echo "ERROR: $sql. " . mysqli_error($mysqli);
    }
    
    mysqli_close($mysqli);
?>