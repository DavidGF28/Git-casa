<html>
    <head>
        <title>Ejercicio 9</title>
    </head>
    <body>
        <p>Vamos a colocar en la pagina web los numeros del 1 al 10 
            <?php
                for($c=1;$c<11;$c++)
                {
                    echo"<hr>$c";
                }
            ?>
            <hr> Vamos a mostrar los pesos de cada uno de los alumnos
            <?php
                $pesos=array("Jaime"=>100,"Jose"=>80,"Ana"=>75);
                // Queremos mostrar en una tabla los pesos de cada uno de los alumnos
                // junto con su nombre
            ?>
        </p>
        <table width="100%" border="1">
            <tr>
                <?php
                    foreach ($pesos as $indice=>$valor)
                    {
                ?>
                <td>
                    <?php
                        echo $indice;
                    ?>
                </td>
                <?php
                }
                ?>
            </tr>
            <tr>
                <?php
                    foreach ($pesos as $indice=>$valor)
                    {
                        echo "<td>$valor</td>";
                    }
                ?>    
            </tr>
        </table>
    </body>
</html>