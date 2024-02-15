<?php
    include("connection.php");

    $id = $_GET["id"];

    $sql_child = "DELETE FROM DescricaoArmamento WHERE ID = $id";
    $result_child = $conn->query($sql_child);

    $sql_parent = "DELETE FROM Armamentos WHERE ID = $id";
    $result_parent = $conn->query($sql_parent);

    if ($result_parent === TRUE) {
?>
<script>
    alert("Dados do Armamento Excluidos.");
    location.href = "armamentos.php";
</script>
<?php
    } else {
        echo "Erro";
    }
?>
