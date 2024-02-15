<?php
include("connection.php");

$id = $_GET["id"];
$sql = "SELECT ID, Tipo, Descricao, EstiloDano FROM DescricaoArmamento WHERE ID = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $ID = $row["ID"];
        $Tipo = $row["Tipo"];
        $Descricao = $row["Descricao"];
        $EstiloDano = $row["EstiloDano"];
    }
}
?>

<html>
<head>
    <title>Editar Descrição de Armamento</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <a id="Botao2" href="armamentos.php">VOLTAR</a>
    
    <h1 id="Ordo">Editar Descrição de Armamento</h1>
    <form name="form1" id="form1" method="post" action="armamento_descricao_edit_php.php">
        <input type="hidden" name="id" value="<?php echo $ID ?>">
        
        <b id="Realitas">Tipo:</b>
        <input type="text" name="txtTipo" value="<?php echo $Tipo ?>"><br><br>
        
        <b id="Realitas">Descrição:</b>
        <input type="text" name="txtDescricao" value="<?php echo $Descricao ?>"><br><br>
        
        <b id="Realitas">Estilo de Dano:</b>
        <input type="text" name="txtEstiloDano" value="<?php echo $EstiloDano ?>"><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
