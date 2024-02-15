<html>
    <head>
        <title>Editar Agente</title>
    </head>
    <body>
        <a id="Botao2" href="agentes.php">VOLTAR</a>
        <link href="styles.css" rel="stylesheet">
        <?php
            include("connection.php");

            $id = $_GET["id"];
            $sql = "SELECT ID, Nome, Senha, Patente FROM Agente WHERE id = $id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $ID = $row["ID"];
                    $Nome = $row["Nome"];
                    $Senha = $row["Senha"];
                    $Patente = $row["Patente"];
                }
            }
        ?>
        <h1 id="Ordo">Editar Cadastro de Agente</h1>
        <form name="form1" id="form1" method="post" action="agente_edit_php.php">
            <b id="Realitas">ID:</b>
            <input type="number" name="numberID" value="<?php echo $ID?>"><br><br>
            <b id="Realitas">Nome:</b>
            <input type="text" name="txtNome" value="<?php echo $Nome?>"><br><br>
            <b id="Realitas">Senha:</b>
            <input type="password" name="passwordSenha" value="<?php echo $Senha?>"><br><br>
            <b id="Realitas">Patente:</b>
            <input type="text" name="txtPatente" value="<?php echo $Patente?>"><br><br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
