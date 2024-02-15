<?php
    include("connection.php");

    $ID = $_POST["txtID"];
    $Senha = $_POST["txtSenha"];

    $sql = "SELECT ID, Senha FROM Agente WHERE ID = '$ID'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row["Senha"];  
        if ($row["Senha"] == $Senha) {
            session_start();
            $_SESSION["id"] = $row["ID"];  
            header("Location: index.php");
        } else {
            ?>
            <script>
                alert("Senha não confere!!!");
                history.go(-1);
            </script>
            <?php
        }
    }
} else {
    ?>
    <script>
        alert("Login não confere!!!");
        history.go(-1);
    </script>
    <?php
}
