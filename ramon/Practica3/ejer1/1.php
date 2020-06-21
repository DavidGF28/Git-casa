<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>
            Ejercicio 1
        </title>
    </head>
    <body>
        <?php
            //para sacar los datos utilizamos unas variables predefinidas en PHP
            echo "<hr>$_POST[nombre]";
            echo "<hr>" . $_POST['apellidos'];
            echo "<hr>$_POST[edad]"
        ?>
    </body>
</html>