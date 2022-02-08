<?php
    include("config.php");
    $numero2 = $_GET['numero2'];
    $result = mysqli_query($mysqli, "DELETE FROM protocolo WHERE numero2=$numero2");
    header("Location:sistemaprotocolo.php");
?>