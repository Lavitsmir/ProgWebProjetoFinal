<html>
    <head>
        <link href="styles.css" rel="stylesheet">
        <title>Novo Agente</title>
    </head>
    <body>
        <a id="Botao2" href="agentes.php">VOLTAR</a>
        <h1 id="Ordo">Novo Cadastro de Agente</h1>
        <form name="form1" id="form1" method="post" action="agente_cad_php.php">
            <b id="Realitas">ID:</b>
            <input type="number" name="numberID"><br><br>
            <b id="Realitas">Nome:</b>
            <input type="text" name="txtNome"><br><br>
            <b id="Realitas">Senha:</b>
            <input type="text" name="txtSenha"><br><br>
            <b id="Realitas"> Patente:</b>
            <input type="text" name="txtPatente"><br><br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>