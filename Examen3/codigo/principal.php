<?php
include('funciones.php');
?>

<!DOCTYPE html>

<head>
    <title>DivinaVanid</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <style type="text/css">
        @import '../estilos.css';
    </style>
</head>

<body>
    <center>
        <img src="../fondo.jpg" style="position: absolute;top:80px;left: 100px;width: 80%;height: 80%;border:blue;">
    </center>
    <table style="position: absolute;top:100px;left: 150px;width: 20%;height: 20%;border:blue;" bgcolor="FFFFFF" border="1" cellpadding="1" cellspacing="1">
        <tr>
            <td>
                <?php
                    if (isset($_GET['ejer1'])) {
                        $metodo=$_POST['metodo'];
                        $estado=$_POST['estado'];
                        if ($metodo==1) {
                            if ($estado==0) {
                                ejer1cif_C();
                            }else {
                                ejer1des_C();
                            }
                        }else {
                            if ($estado==0) {
                            ejer1cifrado_E();
                            }else {
                            ejer1des_E();
                            }
                        }
                        
                    }elseif (isset($_GET['ejer2'])) {
                        ejer2();
                    }elseif (isset($_GET['ejer3'])) {
                        ejer3();
                    }elseif (isset($_GET['ejer4_todo'])) {
                        array4($vec);
                        ejer4_todo($vec);
                    }elseif (isset($_GET['ejer4_ciudad'])) {
                        array4($vec);
                        ejer4_ciudad($vec);
                    }elseif (isset($_GET['ejer4_mesciudad'])) {
                        array4($vec);
                        ejer4_mesciudad($vec);
                    }elseif (isset($_GET['ejer4_temperatura'])) {
                        array4($vec);
                        ejer4_temperatura($vec);
                    }elseif (isset($_GET['ejer4_mes'])) {
                        array4($vec);
                        ejer4_mes($vec);
                    }
                ?>
            </td>
        </tr>
    </table>
</body>

</html>