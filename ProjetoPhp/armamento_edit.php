<?php
include("connection.php");

$id = $_GET["id"];
$sql = "SELECT ID, Tamanho, Magica, TipodeMunicao, Estoque FROM Armamentos WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $ID = $row["ID"];
        $Tamanho = $row["Tamanho"];
        $Magica = $row["Magica"];
        $TipodeMunicao = $row["TipodeMunicao"];
        $Estoque = $row["Estoque"];
    }
}
?>

<html>
<head>
    <title>Editar Armamento</title>
</head>
<body>
    <a id="Botao2" href="armamentos.php">VOLTAR</a>
    <link href="styles.css" rel="stylesheet">
    
    <h1 id="Ordo">Editar Cadastro de Armamento</h1>
    <form name="form1" id="form1" method="post" action="armamento_edit_php.php">
        <input type="hidden" name="entity" value="Armamento">
        <input type="hidden" name="id" value="<?php echo $ID ?>">
        <b id="Realitas">Tamanho:</b>
        <input type="text" name="txtTamanho" value="<?php echo $Tamanho ?>"><br><br>
        <b id="Realitas">Mágica:</b>
        <input type="number" name="txtMagica" value="<?php echo $Magica ?>"><br><br>
        <b id="Realitas">Tipo de Munição:</b>
        <input type="text" name="txtTipodeMunicao" value="<?php echo $TipodeMunicao ?>"><br><br>
        <b id="Realitas">Estoque:</b>
        <input type="number" name="numberEstoque" value="<?php echo $Estoque ?>"><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
