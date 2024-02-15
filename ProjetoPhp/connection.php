<?php
    $servername = "localhost";
    $username = "root"; 
    $cesar = "admin"; 
    $dbname = "armas";

    $conn = new mysqli($servername, $username, $cesar, $dbname);

    if ($conn->connect_error) {
        die("Falha: " . $conn->connect_error);
    }
    // echo "Conexão Ok."
?>