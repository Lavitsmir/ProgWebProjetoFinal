<html>
<head>
    <title>Descricao Armas</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body>
<a id="Botao2" href="armamentos.php">VOLTAR</a>
<?php
    include("connection.php");

    $id = $_GET["id"];
    $sql = "SELECT ID, Tipo, Descricao, EstiloDano FROM DescricaoArmamento WHERE ID = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Tipo</th><th>Descricao</th><th>Estilo do Dano</th><th>Ações</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['ID']}</td>";
            echo "<td>{$row['Tipo']}</td>";
            echo "<td>{$row['Descricao']}</td>";
            echo "<td>{$row['EstiloDano']}</td>";
            echo "<td><a href='armamento_descricao_edit.php?id={$row['ID']}'>Editar</a></td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Nenhum resultado encontrado para o ID fornecido.";
    }

    // Feche a conexão
    $conn->close();
?>
</body>
</html>
