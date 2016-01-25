<html>
    <head>
        <title>Captura de datos del formulario</title>
    </head>
    <body> 
        <?php
        echo "La persona ";
        echo $_REQUEST['nombre'];
        if($_REQUEST['edad']>18){
           echo " es mayor de edad";
        }
           else{
            echo " no es mayor de edad";
        };
        ?>
    </body>    
</html>


