<!DOCTYPE html>

<head>
    <title>DivinaVanid</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <style type="../text/css">
        @import 'estilos.css';
    </style>
</head>

<body>

    <div id="menu" style="float:left;margin-left: 60px;">
    </div>
    <center>
        <img src="../fondo.jpg" style="position: absolute;top:80px;left: 100px;width: 80%;height: 80%;border:blue;">
    </center>
    <table style="position: absolute;top:100px;left: 150px;width: 20%;height: 20%;border:blue;" bgcolor="FFFFFF" border="1" cellpadding="1" cellspacing="1">
        <tr>
            <td>
                <form action="../codigo/principal.php?ejer1" method="post">
                    <input type="text" name="mensaje" placeholder="Mensaje">
                    <br>
                    <br>
                    <select name="estado">
                        <option value="0">Enciptado</option>
                        <option value="1">Desencriptar</option>
                    </select>
                    <br>
                    <br>
                    <select name="metodo">
                        <option value="0">Escitalo</option>
                        <option value="1">Cesar</option>
                    </select>
                    <input type="submit" value="enviar">
                </form>
            </td>
        </tr>
    </table>
</body>

</html>