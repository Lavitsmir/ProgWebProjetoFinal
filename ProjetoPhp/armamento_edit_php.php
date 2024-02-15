<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    $Tamanho = $_POST["txtTamanho"];
    $Magica = $_POST["txtMagica"];
    $TipodeMunicao = $_POST["txtTipodeMunicao"];
    $Estoque = $_POST["numberEstoque"];

    $sql = "UPDATE Armamentos SET Tamanho = '$Tamanho', Magica = '$Magica', TipodeMunicao = '$TipodeMunicao', Estoque = '$Estoque' WHERE ID = $id";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "<script>alert('Armamento Alterado com Sucesso.'); location.href = 'armamentos.php';</script>";
    } else {
        echo "Erro";
    }
}
?>
