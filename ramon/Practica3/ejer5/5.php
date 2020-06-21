<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>Ejercicio 5</title>
    </head>
    <body>
        <?php
        // Disponible desde PHP 4.1.0
            echo $_POST['Username'];
            echo $_REQUEST['Username'];
        //Ya no esta disponible desde PHP 6. a partir de PHP 5.0.0, estas variables
        //predefinidas largas pueden ser deshabilitadas con la direciva
        // register_long_arrays
            echo $HTTP_POST_VARS['Username'];
        //Disponible si la directiva de PHP register_globals = on. A partir de
        // PHP 4.2.0 el valor predeterminado de register_globals = off.
        // Usar o depender de este metodo no es recomendable.
            echo $Username;
        // Disponible desde PHP 4.1.0
        // Con esta funcion del lenguaje podemos importar las variables POST con el prefijo p_
//            import_request_variables ('p','p_');
//            echo $p_Username;
            ?>
        <?php
            echo $_POST['Email'];
            echo $_REQUEST['Email'];
//            echo $p_Email;
        ?>
    </body>
</html>