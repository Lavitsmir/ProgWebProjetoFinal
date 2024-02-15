<html>
    <head>
        <link href="styles.css" rel="stylesheet">
        <title>Novo Armamento</title>
    </head>
    <body>
    <a id="Botao2" href="armamentos.php">VOLTAR</a>
        <h1 id="Ordo">Novo Cadastro de Armamento</h1>
        <form name="form1" id="form1" method="post" action="armamento_cad_php.php">
            <b id="Realitas">ID:</b>
            <input type="number" name="numberID"><br><br>
            <b id="Realitas">Tamanho:</b>
            <input type="text" name="txtTamanho"><br><br>
            <b id="Realitas">Mágica (1 para tem Mágica, 0 para não tem!):</b>
            <input type="number" name="txtMagica"><br><br>
            <b id="Realitas"> Tipo de Munição:</b>
            <input type="text" name="txtTipodeMunicao"><br><br>
            <b id="Realitas"> Estoque:</b>
            <input type="number" name="numberEstoque"><br><br>
            <b id="Realitas"> Tipo (Fuzil? Pistola? Etc):</b>
            <input type="text" name="txtTipo"><br><br>
            <b id="Realitas"> Descricao:</b>
            <input type="text" name="txtDescricao"><br><br>
            <b id="Realitas"> Estilo de Dano:</b>
            <input type="text" name="txtEstilodeDano"><br><br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>