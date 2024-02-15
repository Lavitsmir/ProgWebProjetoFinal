<?php
    include("connection.php");

    $ID = $_POST["numberID"];
    $Nome = $_POST["txtNome"];
    $Senha = $_POST["txtSenha"];
    $Patente = $_POST["txtPatente"];

    $sql = "INSERT INTO Agente(ID, Nome, Senha, Patente) VALUES('$ID', '$Nome', '$Senha', '$Patente')";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        header("Location: agentes.php");
    }
    else {
        echo "Erro";
    }
?>