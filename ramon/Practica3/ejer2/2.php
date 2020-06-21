<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>
            Ejercicio 2
        </title>
    </head>
    <body>
        <?php
           foreach ($_POST as $indice=>$valor)
           {
               echo"<hr>$indice=$valor";
           }
        ?>
    </body>
</html>