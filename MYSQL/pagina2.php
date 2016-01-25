<html>
    <head>
        <title>Problemas</title>
    </head>
    <body>
        <?php
        include 'config.php';
        $conexion = new mysqli($host, $username, $password, $db_name);
            if ($conexion->connect_errno) {
                die("Error de conexion: $conexion->connect_error");
            }
            
           mysqli_query($conexion,"insert into alumnos(nombre,mail,codigocurso) values ('$_REQUEST[nombre]','$_REQUEST[mail]',$_REQUEST[codigocurso])")
                        or die("Problemas en el select".mysqli_error($conexion));
            mysqli_close($conexion);
            
            echo "El alumno fue dado de alta";
        ?>
    </body>
</html>