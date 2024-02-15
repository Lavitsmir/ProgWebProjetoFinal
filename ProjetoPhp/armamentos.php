<html>
    <head>
        <link href="styles.css" rel="stylesheet">
        <title>Armamentos</title>
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

    $sql = "SELECT ID, Tamanho, Magica, TipodeMunicao, Estoque FROM Armamentos";
    $result = $conn->query($sql);
?>
    <a href="armamento_cad.php" id="Botao3">+ Adicionar registro</a><br><br>
    <table id="TabelaAgentes">
        <tr>
            <th>id</th>
            <th>Tamanho</th>
            <th>Mágica</th>
            <th>Tipo Municao</th>
            <th>Estoque</th>
            <th colspan=2>Ações</th>
        </tr>
<?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
?>
        <tr>
            <td id="TabelaAgentesTD">
                <a href="armamento_descricao.php?id=<?php echo $row["ID"]?>">
                    <?php echo $row["ID"]?>
                </a>
            </td>
            <td id="TabelaAgentesTD"><?php echo $row["Tamanho"]?></td>
            <td id="TabelaAgentesTD"><?php echo $row["Magica"]?></td>
            <td id="TabelaAgentesTD"><?php echo $row["TipodeMunicao"]?></td>
            <td id="TabelaAgentesTD"><?php echo $row["Estoque"]?></td>
            <td id="TabelaAgentesTD">
                <a href="armamento_edit.php?id=<?php echo $row["ID"]?>">
                    Editar
                </a>
            </td>
            <td id="TabelaAgentesTD">
            <a href="armamento_del.php?id=<?php echo $row["ID"]?>">
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