<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>Ejercicio 3</title>
    </head>
    <body>
        <table width="100%" border="1">
           <tr>
                <?php
                    foreach ($_GET as $indice=>$valor)
                    {
                        if($indice=="enviar"){
                            continue;
                        }
                        echo "<th>$indice</th>";
                    }
                ?>
            </tr>
            <tr>
                <?php
                    foreach ($_GET as $indice=>$valor)
                    {
                        if($indice=="enviar"){
                            continue;
                        }
                        echo "<th>$valor</th>";
                    }
                ?>
            </tr>
        </table>
    </body>
</html>