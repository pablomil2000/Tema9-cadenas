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
                <form action="../codigo/principal.php?ejer3" method="post">
                    <input type="number" name="n0" value="1">
                    <input type="number" name="n1" value="1">
                    <input type="number" name="n2" value="1">
                    <input type="number" name="n3" value="1">
                    <input type="number" name="n4" value="1">
                    <input type="number" name="n5" value="1">
                    <input type="number" name="n6" value="1">
                    <input type="number" name="n7" value="1">
                    <input type="number" name="n8" value="1">
                    <input type="number" name="n9" value="1">

                    <select name="mostrar">
                        <option value="0">-	En el mismo orden que se han introducido</option>
                        <option value="1">-	Intercambiando los elementos situados en posiciones consecutivas</option>
                        <option value="2">-	En orden inverso a como se han introducido</option>
                    </select>
                    <input type="submit" value="enviar">
                </form>
            </td>
        </tr>
    </table>
</body>

</html>