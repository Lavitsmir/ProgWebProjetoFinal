<?php
    include("connection.php");

    $ID = $_POST["numberID"];
    $Nome = $_POST["txtNome"];
    $Senha = $_POST["passwordSenha"];
    $Patente = $_POST["txtPatente"];

    $sql = "UPDATE Agente SET ID = '$ID', Nome = '$Nome', Senha = '$Senha', Patente = '$Patente' WHERE id = $ID";
    $result = $conn->query($sql);

    if ($result === TRUE) {
?>
<script>
    alert("Agente Alterado com Sucesso.");
    location.href = "agentes.php";
</script>
<?php
    }
    else {
        echo "Erro";
    }
?>