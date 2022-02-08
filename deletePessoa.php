<?php
    include("config.php");
    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM Pessoas WHERE id=$id");
    header("Location:sistema.php");
?>