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
                <li class="menupal"><a href="../codigo/principal.php?ejer4_todo" class="nivel1">Mostrar todo</a></li>
                <br>
                <label>Mostrar por ciudad</label>
                <br>
                <br>
                <form action="../codigo/principal.php?ejer4_ciudad" method="post">
                    <select name="ciudad" id="">
                        <option>Huelva</option>
                        <option>Sevilla</option>
                        <option>Cordoba</option>
                        <option>Cadiz</option>
                        <option>Malaga</option>
                    </select>
                    <input type="submit" value="Buscar por ciudad">
                </form>
                <br>
                <label>Buscar por mes</label>
                <br>
                <br>
                <form action="../codigo/principal.php?ejer4_mes" method="post">
                    <select name="mes" id="">
                        <option>Octubre</option>
                        <option>Noviembre</option>
                        <option>Diciembre</option>
                    </select>
                    <input type="submit" value="Buscar por mes">
                </form>
                <br>
                <label>Buscar temperatura</label>
                <br>
                <br>
                <form action="../codigo/principal.php?ejer4_temperatura" method="post">
                    <input type="number" name="temperatura" placeholder="temperatura">
                    <input type="submit" value="Busacar temperatura">
                </form>
                <br>
                <label>Buscar por mes/  ciudad</label>
                <br>
                <br>
                <form action="../codigo/principal.php?ejer4_mesciudad" method="post">
                    <select name="ciudad" id="">
                        <option>Huelva</option>
                        <option>Sevilla</option>
                        <option>Cordoba</option>
                        <option>Cadiz</option>
                        <option>Malaga</option>
                    </select>
                    <select name="mes" id="">
                        <option>Octubre</option>
                        <option>Noviembre</option>
                        <option>Diciembre</option>
                    </select>
                    <input type="submit" value="Buscar por mes/ciudad">
                </form>
            </td>
        </tr>
    </table>
</body>

</html>