<?php
    include("connection.php");

    $id = $_GET["id"];

    $sql = "DELETE FROM Agente WHERE ID = $id";
    $result = $conn->query($sql);

    if ($result === TRUE) {
?>
<script>
    alert("Agente Excluido.");
    location.href = "agentes.php";
</script>
<?php
    } else {
        echo "Erro";
    }
?>
