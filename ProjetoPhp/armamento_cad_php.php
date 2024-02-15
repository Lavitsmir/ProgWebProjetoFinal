<?php
    include("connection.php");

    $ID = $_POST["numberID"];
    $Tamanho = $_POST["txtTamanho"];
    $Magica = $_POST["txtMagica"];
    $TipodeMunicao = $_POST["txtTipodeMunicao"];
    $Estoque = $_POST["numberEstoque"];
    $Tipo = $_POST["txtTipo"];
    $Descricao = $_POST["txtDescricao"];
    $EstiloDano = $_POST["txtEstilodeDano"];

    $sql = "INSERT INTO Armamentos(ID, Tamanho, Magica, TipodeMunicao, Estoque) VALUES('$ID', '$Tamanho', '$Magica', '$TipodeMunicao', '$Estoque')";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        $sql1 = "INSERT INTO DescricaoArmamento(ID, Tipo, Descricao, EstiloDano) VALUES('$ID', '$Tipo', '$Descricao', '$EstiloDano')";
        $result1 = $conn->query($sql1);

        if ($result1 === TRUE) {
            header("Location: armamentos.php");
        } else {
            echo "Erro na Segunda Querry";
        }
    } else {
        echo "Erro na Primeira Querry";
    }
?>
