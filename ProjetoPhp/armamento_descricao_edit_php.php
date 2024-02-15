<?php
    include("connection.php");

    // Obtém os dados do formulário
    $ID = $_POST["id"];
    $Tipo = $_POST["txtTipo"];
    $Descricao = $_POST["txtDescricao"];
    $EstiloDano = $_POST["txtEstiloDano"];

    // Atualiza os dados na tabela DescricaoArmamento
    $sql = "UPDATE DescricaoArmamento SET Tipo = '$Tipo', Descricao = '$Descricao', EstiloDano = '$EstiloDano' WHERE ID = $ID";
    $result = $conn->query($sql);

    // Verifica se a atualização foi bem-sucedida
    if ($result === TRUE) {
?>
        <script>
            alert("Descrição do Armamento Alterado com Sucesso");
            location.href = "armamentos.php";
        </script>
<?php
    } else {
        echo "Erro";
    }
?>
