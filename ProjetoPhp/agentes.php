<html>
    <head>
        <link href="styles.css" rel="stylesheet">
        <script src="java.js"></script>
        <title>Agentes</title>
        <style>
            table {
                border: #000 1px solid;
                width: 100%
            }
            table td {
                border: #000 1px solid;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <a id="Botao2" href="index.php">VOLTAR</a>
<?php
    include("connection.php");

    $sql = "SELECT ID, Nome, Patente FROM Agente";
    $result = $conn->query($sql);
?>
    <a id="Botao3" href="agente_cad.php">+ Adicionar registro</a><br><br>
    <table id="TabelaAgentes">
        <tr id="TabelaAgentesTR">
            <th>id</th>
            <th>Nome</th>
            <th>Patente</th>
            <th colspan=2>Ações</th>
        </tr>
<?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
?>
        <tr>
            <td id="TabelaAgentesTD"><?php echo $row["ID"]?></td>
            <td id="TabelaAgentesTD"><?php echo $row["Nome"]?></td>
            <td id="TabelaAgentesTD"><?php echo $row["Patente"]?></td>
            <td id="TabelaAgentesTD">
                <a href="agente_edit.php?id=<?php echo $row["ID"]?>">
                    Editar
                </a>
            </td>
            <td id="TabelaAgentesTD">
            <a href="agente_del.php?id=<?php echo $row["ID"]?>">
                    Excluir
                </a>
            </td>
        </tr>
<?php
        }
    }
    else {
?>
        <tr>
            <td colspan=5>Não há registros nesta tabela a exibir</td>
        </tr>
<?php
    }
?>
        </table>
    </body>
</html>