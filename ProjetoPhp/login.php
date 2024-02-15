<html>
    <head>
        <title>Login</title>
        <style>
        body {
        background-image: url('ORDO_REALITAS.png');
        background-size: 1800px 900px;
        background-repeat: no-repeat; 
        }

        h1 {
            text-align: center;
        }
        </style>
    </head>
    <body>
        <h1>Insira seu Login e Senha.</h1>
        <form id="form1" name="form1" method="post" action="login_php.php">
            <table align="center">
                <tr>
                    <td style="width: 50px; text-align: right">Login: </td>
                    <td>
                        <input type="text" name="txtID" style="width: 200px;">
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right">Senha:</td>
                    <td><input type="password" name="txtSenha" style="width: 200px;"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <input type="submit" value="Enviar">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>